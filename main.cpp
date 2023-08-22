#include <linux/module.h>    // included for all kernel modules
#include <linux/kernel.h>    // included for KERN_INFO
#include <linux/init.h>      // included for __init and __exit macros
#include <linux/sched/signal.h>
#include <linux/sched.h>

MODULE_LICENSE("GPL");
MODULE_AUTHOR("Manoj");
MODULE_DESCRIPTION("Linux Process Security");

struct task_struct *task;        /*    Structure defined in sched.h for tasks/processes    */
struct task_struct *task_child;        /*    Structure needed to iterate through task children    */
struct list_head *list;            /*    Structure needed to iterate through the list in each task->children struct    */

static int __init hello_init(void)
{
    printk(KERN_INFO "Loading Module Linux Process Security!\n");

    for_each_process( task ){            /*    for_each_process() MACRO for iterating through each task in the os located in linux\sched\signal.h    */
        printk(KERN_INFO "\nPARENT PID: %d PROCESS: %s STATE: %ld",task->pid, task->comm, task->state);/*    log parent id/executable name/state    */
        list_for_each(list, &task->children){                        /*    list_for_each MACRO to iterate through task->children    */
 
            task_child = list_entry( list, struct task_struct, sibling );    /*    using list_entry to declare all vars in task_child struct    */
     
            printk(KERN_INFO "\nCHILD OF %s[%d] PID: %d PROCESS: %s STATE: %ld",task->comm, task->pid, /*    log child of and child pid/name/state    */
                task_child->pid, task_child->comm, task_child->state);
        }
        printk("-----------------------------------------------------");    /*for aesthetics*/
    }

    return 0;    // Non-zero return means that the module couldn't be loaded.
}

static void __exit hello_cleanup(void)
{
    printk(KERN_INFO "Cleaning up module Linux Process Security.\n");
}

module_init(hello_init);
module_exit(hello_cleanup);