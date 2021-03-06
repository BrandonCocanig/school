# Author: Brandon Cocanig
# Assignment: Gpa version 2 electric bogalo
# Due: Oct, 17, 19
print('\nWelcome to the GPA calculator.')
print('Please enter all your letter grades, one per line. {A+-F}')
print('Enter a blank line to designate the end.')

# map from letter grade to point value
points = {'A+': 4.0, 'A': 4.0, 'A-': 3.67, 'B+': 3.33, 'B': 3.00,
          'B-': 2.67, 'C+': 2.33, 'C': 2.00, 'C-': 1.67, 'D+': 1.33,
          'D': 1.0, 'F': 0}

num_courses = 0
total_points = 0

done = False
while not done:
    grade = input()
    if grade == '':
        done = True
    elif grade not in points:
        print("Unknown grade '{0}' being ignored".format(grade))
    else:
        num_courses += 1
        total_points += points[grade]
if num_courses > 0:
    gpa = total_points / num_courses
    if gpa > 3.8:
        print("STUDENT QUALIFIES FOR DEAN’s LIST, GPA is above 3.8.")
    if gpa < 2.5:
        print("STUDENT IS ON PROBATION FOR THE COMPUTER ENGINEERING PROGRAM, GPA is below 2.5")
print('Your GPA is {0:.3}'.format(total_points / num_courses))
