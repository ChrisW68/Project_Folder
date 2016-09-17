import statistics
import sys, os

from statistics import mean as m

admins = {'Python':'123','Math':'3.1415'}
studentDict = {'Chris':[85,75,45],
               'Bill':[45,65,55],
               'Cathy':[75,80,78],
               'Leslie':[85,87,81]}

def main():
    print('\n Welcome to Grade Central')
    print('[1] - Student Roster')
    print('[2] - Enter Grades')
    print('[3] - Remove Student')
    print('[4] - Student Average Grades')
    print('[5] - Exit \n')
    
    selectOperation = input('What would you like to do today? (Enter a number)')

    if selectOperation == '1':
        studentRoster()
    elif selectOperation == '2':
        enterGrade()
    elif selectOperation == '3':
        removeStudent()
    elif selectOperation == '4':
        avgGrade()
    else:
        print('Thank you. Have a good day')
        exit()

def studentRoster():
    print('\nHere are the name of your students in your class')
    for name, grade in studentDict.items():
        print('   ',name.title())

def enterGrade():
    nameToEnter = input('Student''s Name: ')
    gradeToEnter = input('Grade: ')

    if nameToEnter in studentDict:
        print('Adding Grade ...')
        studentDict[nameToEnter].append(float(gradeToEnter))
    else:
        print('Student does not exist.')
 

def removeStudent():
    nameToRemove = input('Student''s name: ')

    if nameToRemove in studentDict:
        print('Removing student: ',nameToRemove)
        del studentDict[nameToRemove]
    else:
        print('Student name: ',nameToRemove,' does not exist in the records!')
    print(studentDict)

def avgGrade():
    print('\nThe average grade of each student is: ')
    for eachStudent in studentDict:
        gradeList = studentDict[eachStudent]
        avgGrade = m(gradeList)
        print('Average grade of: ',eachStudent,' is: ',avgGrade)
        
def login():        
    login = input('Username: ')
    passw = input('Password: ')
    if login in admins:
        if admins[login] == passw:
            print('Welcome: ',login,' teacher')
            while True:
                main()
        else:
            print('Incorrect username,bye!')
            exit()
    else:
        print('Incorrect username,bye!')
        exit()

login()

    
    






