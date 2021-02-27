TAX_RATE = 0.1
hours = float(input("Enter hours worked: "))
hourly_pay = float(input("Enter hourly pay: "))
over_hours = hours - 40
over_pay = 1.5 * over_hours * hourly_pay
salary = hours * hourly_pay + over_pay
tax = TAX_RATE * salary
net = salary - tax
print("The employee's paycheck should be made out for $", salary)
print("The take-home pay is $%.2f." % net)
print("We took out $%.2f in taxes." % tax)
