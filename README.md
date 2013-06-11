This Repository gives you the information how to send the random confirmation link  to the registered user using the swift mailer bundle.
The following are the steps you need to follow inorder to make it work
open the config.yml file of your symfony project and set the swift mailer configuration.
By default the symfony comes with swift mailer bundle.you just need to configure it.
You can use your gmail username and password inorder to send the mails.
initiate an instance of swiftmailer bundle where you want to use.
Here in this repository in the register bundle i have used it.
In the template a function is used which generates the random number and attached to the link and send to the user.




