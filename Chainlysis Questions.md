#### Are there any sub-optimal choices( or short cuts taken due to limited time ) in your implementation?

- One of my sub-optimal choices was deciding to use PHP instead of react.js to parse through the crypto compare and Messari API. 
I chose to do this because the current new version of React.js has a problem where it does not generate the webpage when compiled.
- Another sub-optimal choice is deciding to use the messari api. This is because this api does not update very often, it only updates every hour. 
Therefore it is not very reliable when checking for cryptocurrency prices.

#### Is any part of it over-designed? ( It is fine to over-design to showcase your skills as long as you are clear about it)

- The part that is over-designed are the added links that change the content area based on which link is displayed. 
Also, including the about tab for the website is not needed but it is useful to show where I got my data.

#### If you have to scale your solution to 100 users/second traffic what changes would you make, if any?

- To scale my solution to 100 users/seconds traffic, the api's used along with the server host for the website would need to be built based on that traffic.
Essentially, the api would need to be able to handle 100 users clicking and most api's unless its paid for ( or for professional usage) would not be able to handle that. 
- Furthermore, to handles
the traffic I would include some kind of cyber security and maybe a log-in system. An example could be an implementation of a reCAPTCHA to prevent bots or unwanted traffic.
This kind of cyber security needs to be included because it would be easy to overload the website with too many requests. Without such prevention, DDOS attacks with upwards to 275,000 Requests/second therefore verifying that the user is human is needed.
- Also, some testing would be required such as load testing to see how many users would be able to enter the website. Once we determine that it can not handle 100 users/second the website needs to be scaled by upgrading the server or adding a database.

#### What are some other enhancements you would have made, if you had more time to do this implementation

- Furthermore, including a sql database that holds the previous values for the api data could be implemented using a chart on the website. In the same sense, we can use the sql database for feedback on the website. Also, including a dynamic user interface such as interactable cards for eth and BTC along with a more colorful website. 
- I would include an SQL database because it could be used to make the website more robust. The data that is received can be used to track previous prices to map the prices out on the website thus it would be useful for the users. Also, to increase cyber security I would prevent sequel injection by implementing input validation and parametrized queries.
- Along with a better api, I would also include an auto refresher every 5 seconds instead of a manual refresh. For example, setInterval() or setTimeout() in React.js would work. I would build a live version of this comparison if given time, what I would do is buy a domain name for the website and upload the files needed.

