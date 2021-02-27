from randmac import RandMac
from random import getrandbits
from ipaddress import IPv4Address
import time, sys, random

def print_slow(str):
    for letter in str:
        sys.stdout.write(letter)
        sys.stdout.flush()
        time.sleep(0.1)


initial_sequence_number_host_a = random.randrange(100, 999)
initial_sequence_number_host_b = random.randrange(100, 999)

bits = getrandbits(32)
host_a_source_addr = IPv4Address(bits)
host_a_source_mac = RandMac("00:00:00:00:00:00")
host_b_source_mac = RandMac("00:00:00:00:00:00")
bits = getrandbits(32)
host_b_source_addr = IPv4Address(bits)

print("host a: sending an arp request to host b", host_b_source_addr)
print("outgoing arp request:")
print_slow("...............\n")
time.sleep(1)

print("Source hardware address:", host_a_source_mac)
print("Source protocol address:", host_a_source_addr)
print("Target hardware address: 00:00:00:00:00:00")
print("Target protocol address:", host_b_source_addr)
time.sleep(2)

print("\n")
print("incoming arp reply from host b:")
print_slow("...............\n")
time.sleep(1)

print("Source hardware address:", host_b_source_mac)
print("Source protocol address:", host_b_source_addr)
print("Target hardware address:", host_a_source_mac)
print("Target protocol address:", host_a_source_addr)

time.sleep(2)
print("\n")
# source to destination do you want to talk syn
print("host a:", host_a_source_addr, "wants to connect to host b:", host_b_source_addr)
print_slow(".............\n")
print("host a: sending SYN...", initial_sequence_number_host_a)
print_slow("............\n")
# destination acknowledgment ark, do you want to talk to me syn
print("host b: received SYN, Sending ARK", initial_sequence_number_host_a+1, "and SYN...", initial_sequence_number_host_b)
print_slow("..........\n")
# source ack the new syn
print("host a: received ark and verified, Sending ARK", initial_sequence_number_host_b+1)
print("host a: successful connection established")
