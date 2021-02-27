#By; Brandon Cocanig 10/01/18
# purpose covert temp into celsius fahrenheit or kelvin

# fahrenheit to celsius
def fahrenheit_to_celsius(temp):
    result = (temp-32) * 5/9
    return result

# kelvin to celsius
def kelvin_to_celsius(temp):
    result = (temp-273)
    return result

# celsius to fahrenheit
def celsius_to_fahrenheit(temp):
    result = temp * 9/5+32
    return result

# celsius to kelvin
def celsius_to_kelvin(temp):
    result = (temp+273)
    return result

# get input of degrees
temperature = int(input("Enter degrees: "))
#get input of temp type c f or k
input_scale = input("Enter C for Celsius or F for Fahrenheit or K for kelvin: ")
input_scale = input_scale.strip().upper() # disregards any uppercase
# convert to celsius no matter what.
if input_scale == "C": # if user inputted Celsius
    converted_temp = temperature

elif input_scale == "F": # if user inputted fahrenheit
    converted_temp = fahrenheit_to_celsius(temperature)

elif input_scale == "K": # if user inputted kelvin
    converted_temp = kelvin_to_celsius(temperature)

else: print("wrong temp scale") # if k,f,k was not inputted


# ask for desired temp output type
output_scale = input("Which temp scale do you want to convert too: Enter C for Celsius or F for Fahrenheit or K for kelvin: ")
output_scale = output_scale.strip().upper() # disregards any uppercase

#todo
# convert c to desired temp type
if output_scale == "C": # if user inputted Celsius
    output_temp = converted_temp

elif output_scale == "F": # if user inputted fahrenheit
    output_temp = celsius_to_fahrenheit(converted_temp)

elif output_scale == "K": # if user inputted kelvin
    output_temp = celsius_to_kelvin(converted_temp)

# output answer
print(output_temp)