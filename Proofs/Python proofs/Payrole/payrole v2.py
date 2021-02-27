# code written by Brandon Cocanig 9/4/18
# code used to calculate pay
# class FA18-CPSC-20000-004 (Intro to Computer Science)
# input: hours worked and how much is the hourly pay

# process:
#       part1: basic calculate the pay, pay * number of hours * pay rate of person
#       part2: include tax, calculate the pay, find tax amount, net pay rate of the person
#       part3: include overtime, calculate base pay, calculate overtime, pay = base pay + overtime pay, figure out tax
#       ,net pay + pay - tax
# output: total paycheck, actual take home pay, amount of taxes due on total paycheck

# current tax rate 10%
TAX_RATE = 0.1
# ask user how many hours they worked
hours = float(input("Enter hours worked: "))
# enter pay per hour in $
hourly_pay = float(input("Enter hourly pay: "))
# any time over 40 should be counted as overtime
over_hours = hours - 40
# only count over hours if there above 0
if over_hours < 0:
    over_hours = 0
over_pay = 1.5 * over_hours * hourly_pay
if hours > 40:
    hours = 40
salary = hours * hourly_pay + over_pay
tax = TAX_RATE * salary
net = salary - tax
print("The employee's paycheck should be made out for $", salary)
print("The take-home pay is $%.2f." % net)
print("We took out $%.2f in taxes." % tax)
print("you overtime added $%.2f to your paycheck." % over_pay)
