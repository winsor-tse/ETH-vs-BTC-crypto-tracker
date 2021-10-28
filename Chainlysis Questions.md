####Are there any sub-optimal choices( or short cuts taken due to limited time ) in your implementation?

- One of my sub optimal choices was decicing to use php instead of react.js to parse through the cryptocompare and Messari API. 
I chose to do this because the current new version of React.js has a problem where it does not generate the webpage when compiled.
Another sub optimal choice is deciding to use the messari api. This is because this api does not update very often, it only updates every hour. 
Therefore it is not very reliable when checking for cryptocurrency prices.

####Is any part of it over-designed? ( It is fine to over-design to showcase your skills as long as you are clear about it)

- addind links that change the content area based on which link is displayed,

####If you have to scale your solution to 100 users/second traffic what changes would you make, if any?

- To scale my solution to 100 users/seconf traffic, the api's used along with the server host for the website would need to be built based on that traffic.
Essentially, the api would need to be able to handle 100 users 

####What are some other enhancements you would have made, if you had more time to do this implementation

- Furthermore, by choice of not implementing a sql database was also a short cut.