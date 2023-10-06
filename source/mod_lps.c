#include <linux/module.h>    // included for all kernel modules
#include <linux/kernel.h>    // included for KERN_INFO
#include <linux/init.h>      // included for __init and __exit macros
#include <linux/sched/signal.h>
#include <linux/sched.h>
#include <net/sock.h>
#include <linux/netlink.h>
#include <linux/skbuff.h>
#include <linux/slab.h>

#define MY_NETLINK 30 // cannot be larger than 31, otherwise we shall get "insmod: ERROR: could not insert module netlink_kernel.ko: No child processes"

MODULE_LICENSE("GPL");
MODULE_AUTHOR("Manoj");
MODULE_DESCRIPTION("Linux Process Security");

struct task_struct *task;        /*    Structure defined in sched.h for tasks/processes    */
struct task_struct *task_child;        /*    Structure needed to iterate through task children    */
struct list_head *list;            /*    Structure needed to iterate through the list in each task->children struct    */

struct sock *nl_sk = NULL;

typedef struct
{
    int pid;
    char process;
    int state;
} PROCESS;

typedef struct
{
    int pid;
    char process;
    int state;
} CHILD_PROCESS;

static void LPS_recv_msg(struct sk_buff *skb)
{
    struct nlmsghdr *nlhead;
    struct sk_buff *skb_out;
    int pid, res, msg_size;
    char *msg = "Hello msg from kernel";




    printk(KERN_INFO "Entering: %s\n", __FUNCTION__);

    msg_size = strlen(msg);

    nlhead = (struct nlmsghdr*)skb->data;    //nlhead message comes from skb's data... (sk_buff: unsigned char *data)

    printk(KERN_INFO "MyNetlink has received: %s\n",(char*)nlmsg_data(nlhead));


    pid = nlhead->nlmsg_pid; // Sending process port ID, will send new message back to the 'user space sender'


    skb_out = nlmsg_new(msg_size, 0);    //nlmsg_new - Allocate a new netlink message: skb_out

    if(!skb_out)
    {
        printk(KERN_ERR "Failed to allocate new skb\n");
        return;
    }

    nlhead = nlmsg_put(skb_out, 0, 0, NLMSG_DONE, msg_size, 0);   // Add a new netlink message to an skb

    NETLINK_CB(skb_out).dst_group = 0;                  


    strncpy(nlmsg_data(nlhead), msg, msg_size); //char *strncpy(char *dest, const char *src, size_t count)

    res = nlmsg_unicast(nl_sk, skb_out, pid); 

    if(res < 0)
        printk(KERN_INFO "Error while sending back to user\n");

}

static int __init hello_init(void)
{
    printk(KERN_INFO "Loading Module Linux Process Security!\n");

    struct netlink_kernel_cfg cfg = {
        .input = LPS_recv_msg,
    };

    /*netlink_kernel_create() returns a pointer, should be checked with == NULL */
    nl_sk = netlink_kernel_create(&init_net, MY_NETLINK, &cfg);
    printk("Entering: %s, protocol family = %d \n",__FUNCTION__, MY_NETLINK);
    if(!nl_sk)
    {
        printk(KERN_ALERT "Error creating socket.\n");
        return -10;
    }

    printk("MyNetLink Init OK!\n");

    //netlink_kernel_release(nl_sk);
    //sock_release(&nl_sk->socket);

    return 0;    // Non-zero return means that the module couldn't be loaded.
}

static void __exit hello_cleanup(void)
{
    netlink_kernel_release(nl_sk);
    printk(KERN_INFO "Cleaning up module Linux Process Security.\n");
}

module_init(hello_init);
module_exit(hello_cleanup);