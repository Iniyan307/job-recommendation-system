from types import NoneType
import mysql.connector
from sklearn.feature_extraction.text import CountVectorizer
import pandas as pd
import numpy as np

def test():
    conn = mysql.connector.connect(
        host='localhost',
        user='root', 
        password='',  
        database='jrs1'
    )

    mycursor = conn.cursor()
    sql = '''SELECT * from QUIZ1'''
    mycursor.execute(sql)

    result = mycursor.fetchone()
    print(result)
    res = []
    for val in result:
        if val != None :
            res.append(val)

    def listToString(s):
        str1 = " "
        return (str1.join(s))

    result = listToString(res)
    print(result)
    if(1):
        appDev =  'java Kotlin React js native JavaScript Swift Objective-C  Angular'
        BackendDev =  'Python Java PHP SQL Ruby'
        FrontendDev =  'HTML CSS JavaScript DOM Manipulation JSON AJAX Node js'
        dbAdmin =  'SQL UNIX Linux Oracle HTML' 
        dbDev =  'SQL C++ .NET AWS C# Agile' 
        FullstackDev =  'HTML CSS JavaScript Python Java PHP SQL Ruby' 
        Sde =  'HTML CSS JavaScript Python Java C++ SQL' 
        Testing =  'Selenium Apache Jmeter RFT Appium Java Python C++' 
        DataScientist =  'Python Perl C C++ SQL Java' 
        DataAnalyst =  'Data Visualization Data Cleaning MATLAB R Python SQL Machine Learning' 
        MLEngineer =  'Python R SQL Java Applied Mathematics' 
        CloudArchitect =  'Java Python C# Networking Data Storage Fundamentals Security Foundations' 
        CloudSecurityAnalyst =  'Networking Java C++ Python PowerShell MacOS Windows Linux' 
        ProjectCoordinator =  'communication multi-tasking organization analytical problem solving Team-management leadership' 
        BusinessAnalyst =  'Budgeting forecasting Planning monitoring Reporting communication  Analytical thinking problem solving' 
        SEOSpecialist =  'Critical Thinking communication PRIORITIZATION PROJECT MANAGEMENT HTML CSS JavaScript Writing' 
        SocialMediaMarketing =  'Communication Writing Creativity marketing skills Project Management Strategic Thinking Relationship Building'


    docs = [result,appDev, BackendDev, FrontendDev, dbAdmin, dbDev, FullstackDev, Sde, Testing, DataScientist, DataAnalyst, MLEngineer, CloudArchitect, CloudSecurityAnalyst, ProjectCoordinator, BusinessAnalyst, SEOSpecialist, SocialMediaMarketing]
    count_vectorizer = CountVectorizer()
    sparse_matrix = count_vectorizer.fit_transform(docs)


    doc_term_matrix = sparse_matrix.todense()
    df = pd.DataFrame(doc_term_matrix, 
                    columns=count_vectorizer.get_feature_names(), 
                    index=['result','appDev', 'BackendDev', 'FrontendDev', 'dbAdmin', 'dbDev', 'FullstackDev', 'Sde', 'Testing', 'DataScientist', 'DataAnalyst', 'MLEngineer', 'CloudArchitect', 'CloudSecurityAnalyst', 'ProjectCoordinator', 'BusinessAnalyst', 'SEOSpecialist', 'SocialMediaMarketing'])

    from sklearn.metrics.pairwise import cosine_similarity
    a=cosine_similarity(df,df)

    arr = a[0]
    arr = arr[1:]

    index = arr.argmax()

    print(arr[index])
    print(index)
    # if index==[5]:
    #     print("FSD is recommended")


    #PYTHON TO MYSQL DATABASE:
    insert_stmt = (
    "INSERT INTO PYINDEX(PYINDEX)"
    "VALUES (%s)"
    )

    #mysql.connector.errors.ProgrammingError: Could not process parameters: str(5), it must be of type list, tuple or dict
    data = str(index)
    data= [(data)]

    # Executing the SQL command
    mycursor.execute(insert_stmt, data)
    
    # Commit your changes in the database
    conn.commit()


test()