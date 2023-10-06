obj-m += mod_lps.o

#generate the path
CURRENT_PATH:=$(shell pwd)

#the current kernel version number
LINUX_KERNEL:=$(shell uname -r)

#the absolute path
LINUX_KERNEL_PATH:=/usr/src/linux-headers-$(LINUX_KERNEL)



#complie object
#   extension of "make modules" cmd with -C option and "M=dir" configuration
#   this cmd will switch working directory to the given path followed by the -C option
#   and will search specified source files from the given path configured by "M=" 
#   and compile them to generate ko files

all:
        @echo $(LINUX_KERNEL_PATH)
        make -C $(LINUX_KERNEL_PATH) M=$(CURRENT_PATH) modules

client:
        gcc lps.c -o lps -g

#clean
clean:
        make -C $(LINUX_KERNEL_PATH) M=$(CURRENT_PATH) clean
        rm lps
