# FemmeHacks2021

This is a live-website. Check it out at http://koalaattack.com/Volunteer/Home.html

Inspiration
we were inspired to do this project because we had never seen a website that students could do this before. We thought that it would be a great thing to make

What it does
Volunteer Cloud is a non-profit organization that helps students, teachers, and everyday people find service opportunities that not only aid to the person’s interests, but also help the community. As you can see here this is our homepage. We included our mission statement on the front of the site, as well as the founders of the organization. The logo is one hundred percent original, and the website is dynamically updating. As we continue scrolling, you can contact the employees at the website through email. At the very bottom of the homepage, we give a shout out to the sponsors who made this possible, as well as to Femmehacks for hosting his hackathon. Our goal was to create a space for students to keep track of their community service hours, and to explore service opportunities that may interest them more than just what is offered at their school. When you click on the volunteer opportunities page on the side nav, it accesses our database and gives you a complete list of over two hundred volunteer opportunities in New York City. If we were to have more time working on this website, we would expand the database as to have more than just New York City work. We give the name of the organization, eligibility requirements, summary of what the service work is, their website, and exact address. Another feature that differentiates us from other websites of the same nature, is the map of all the service work. This map shows you the locations of each volunteer opportunity, and you can look at the nearest work to you, as to make service work more accessible to the average busy student or adult. Using this map, you can zoom to your location, and click through the work. When selected, a quick summary of the details are given, and easy access to the website so you can enroll or contact them.

We briefly mentioned earlier that Volunteer Cloud was designed to help students keep track of their community service hours. As you can see, there is a space where students or adults can sign up or login to their profile. All usernames, passwords, and school ids are saved or verified with the database. The school ID is of course optional as we want to include as many people as possible with this community service work, regardless if they are students. Here people can enter a goal of how many community service hours they would like to accomplish. For students, they would enter at least the minimum of how many credits they need to receive for their school. Then people can browse, fulfill their hours, and come back to tell how many hours they did. The amount of hours and goals is saved to the database, so students do not have to remember how many they have to complete. Because of the school ID, eventually we will be able to send announcements to every student registered to the school ID, the school can send reminders, or new opportunities they think will be good for their students.

How we built it
This website was created mostly in HTML, with Javascript and CSS elements. The database was created in Google Sheet, and then converted into a csv so it could be placed onto a server. To connect the HTML and the database, we used php. The database has over 200 lines, and we hope to expand it, so give many more options to students and adults all over New York City and eventually nationwide. The map feature was a custom google map, created using mapping sheets, which converts the street addresses in the database into pinpoints on the map. The custom map was then embedded as a link onto the HTML webpage. With another database, we compiled all of the usernames, passwords, and school ids of the people signing in.

Challenges we ran into
We had a lot of trouble connecting the HTML code to the database. We had originally forgotten that HTML webpages cannot access local files, so we were quite confused when it would not work out. But then we figured out the cause, and moved our databases onto a server, which solved the problem.

What we learned
We gained a lot of practice using HTML and JavaScript, as well as learning how to use PHP better.

What's next for Volunteer Cloud
We hope to expand the database as to include all of the US's service opportunities, not just in New York City.

