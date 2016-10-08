#Openwebpage
import urllib2
from bs4 import BeautifulSoup

webpage = urllib2.urlopen( \
    "http://inadaybooks.com/justiceleague")

#BeautifulSoup module will in the below function will
#print out the title of the webpage using the .title function
soup = BeautifulSoup(webpage)
#print soup.title

#The content inside the body tag will be printed
#soup = BeautifulSoup(webpage)
#print soup.body

#Retrieves and prints the ontents container div
divContainer = soup.find("div", {"id":"container"})
print divContainer

#Search inside the divContainer() and output each of the div's
#with the class "block" into an array
divBlock = divContainer.findAll("div", \
                                {"class":"block"})
#Print the fourth div "block" in the array.
print divBlock[3]

#Get the fourth div class "separator"
divSep = divBlock[3].findAll("div", \
                             {"class":"separator"})
print divSep

#Get the contents container div
divContainer = soup.find("div", {"id":"container"})
print divContainer

print divSep[3]

members = divSep[3].findAll("a")
print members

#Loop through members
for member in members:
    #Sring <a> tags
    print member.get_text()
                                 
print member.get("title")

#Gets and prints the href of the a tag
print member.get("href")

def extractMData(webpage):
    soup = BeautifulSoup(webpage)
    print soup.title
    extractMDatat(mPage)
