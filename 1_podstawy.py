print("test");
print(8)

x=10.1234
print(x)
print("{:.2f}".format(x))

x=10.1256
print(x)
print("{:.2f}".format(x))

#potęgowanie
pow=2**10
print(pow)

'''
 danych
z klawiatury
'''

x=2
y=2
# XOR ^
result=x^y
print(result)

#konkatenacja +
name=input()
print("Twoje imię: " + name)

length=len(name)
print(length)
firstLetter=name[0]
print(firstLetter)
print(type(name))
print(type(x))
y=10.5
print(type(y))
lastLetter=name[len(name)-1]
print(lastLetter)
print("\nPodaj swój wiek:", end="")

# konwersja
x="5"
print(type(x))
x=int(x)
print(type(x))
x=x/2
print(x)
print(type(x))
surname="Kowalski"
print()
print(surname[0]) #K
print(surname[0:3]) #Kow
print(surname[6]) #k
print(surname[-2]) #k
print(surname[:-2]) #Kowals
print(surname[:-2:2]) #Kwl
