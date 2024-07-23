This project is created using Visual Studio Code in the HTML and PHP programming language. 
It includes two features: journal data crawling from Google Scholar and a journal search engine.
The data crawling process begins with a user-defined search topic. The program will then extracts
essential journal information such as the title, author, abstract, citation count and the journal 
link from Google Scholar and stores it into a local database.

The images show that the program only  crawled data from journal and accurately reflects the information displayed on Google Scholar.

The stored data from the data crawling feature will serve as the data source for the search engine feature. 
Users can input keywords to find relevant journals, which are ranked based on similarity scores. 
For the Canberra method, the smaller the similarity score, the higher ranked the journal is 
while it’s the opposite for the Cosine method. Aside from that, the program also used query expansion 
to display related topics to the input  keyword.
