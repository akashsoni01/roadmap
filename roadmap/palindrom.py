#!C:\Python34\python.exe
print("content-type: text/html\r\n\r\n")
print("""


<p>hkkhl</p>
""")
x=122
xcopy=x
temp=0
while(xcopy>0):
	temp = temp*10 + xcopy%10
	xcopy//=10

if(temp==x):
	print("palindrom")