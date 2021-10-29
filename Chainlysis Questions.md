#### Are there any sub-optimal choices( or short cuts taken due to limited time ) in your implementation?

- One of my sub optimal choices was decicing to use php instead of react.js to parse through the cryptocompare and Messari API. 
I chose to do this because the current new version of React.js has a problem where it does not generate the webpage when compiled.
Another sub optimal choice is deciding to use the messari api. This is because this api does not update very often, it only updates every hour. 
Therefore it is not very reliable when checking for cryptocurrency prices.

#### Is any part of it over-designed? ( It is fine to over-design to showcase your skills as long as you are clear about it)

- The part that is over-designed are the added links that change the content area based on which link is displayed. 
Also, including the about tab for the website is not needed but it is useful to show where I got my data.

#### If you have to scale your solution to 100 users/second traffic what changes would you make, if any?

- To scale my solution to 100 users/seconds traffic, the api's used along with the server host for the website would need to be built based on that traffic.
Essentially, the api would need to be able to handle 100 users clicking and most api's unless its paid for would not be able to handle that. Furthermore, to handles
traffic I would include some kind of cyber security and maybe a log in system. AN example could be an implementation of a reCAPTCHA to prevent bots or unwanted traffic.
This would be included because it would be easy to overload the website too many request.
Some testing would be required such as load testing to see how many users would be able to enter the website.

#### What are some other enhancements you would have made, if you had more time to do this implementation

- Furthermore, including a sql database that holds the previous values for the api data could be implementated using a chart on the website. In the same sense we can use the sql database
for feedback on the website. Also, including dynamic user interface such as interactable cards for eth and btc along with a more colorful website. Along with a better api, I would also 
include an auto refresher every 5 seconds instead of a manual refresh. For example, setInterval() or setTimeout() in React.js would work. To further compare crypto currency, I would also
implement more data from api's and cacluate the difference in the opening and closing values.
