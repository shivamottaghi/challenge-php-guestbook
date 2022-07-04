# challenge-php-guestbook
## Short explanation about my code structure
This is the second time I am trying to implement MVC in my project. I have this feeling that in the future, one day I might look back at this project, laughing at my old self wondering what the hell I was doing 😶
### Model
#### Classes
1. Post
   - Properties:
      - Name
      - Last name
      - Email
      - Date
      - Message
   - Methods:
     - Getters and setters
2. Loader
   - Properties:
     - Has none
   - Methods:
     - writeDataInFile
       - Calls defineTheArray which is a method to add all the data we want to write in file in one key=>value array
         - Example : ```['name'=> 'Shiva', 'lastName'=> 'Mottaghi']```
     - getAllPosts
       - Is used to show all the posts that have been written in .txt file
### 🖼️ View
- View directory has 3 different pages to show to user
  1. Home page with all the posts displayed
  2. Form, to add a new post
  3. Submission, which shows every information entered by user, plus a successful submission message! (hopefully submission is always successful😁) 
### 🛂 Controller
- Controller directory consists of one class called *Controller*
  - It has 2 properties
    - Loader, which will be assigned in constructor, it's an object of Loader class
    - Page, which I used to update my view with the proper view page
  - Controller has 2 methods
    - Invoke, which switch between home page (with all the posts displayed on screen) and the other one, with a form to create a new post in website
    - FormControl, which only checks to see if a new post has been created. if there were a new post, then this method would call Loader
    to write in file and also show the successful submission message to user.

### My Second experience with MVC
 To be honest, OOP itself is a challenge and to combine it with MVC, it gives me a real headache!💀 But while working with it, I have really started to like it more ^^

#### Want to add features
- [x] User adds emojis
- [x] Profanity filter, to filter bad words
- [x] Use htmlspecialchars()