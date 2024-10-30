=== Client Suite ===
Contributors: BPMContext
Tags: portal, area, customer, client, share files, documents, approval, workflow, routing, intranet, extranet, workflow, file sharing, task management, file sharing, share files online, team collaboration, team workspace, online collaboration, collaborate, online file sharing, secure, knowledge base, repository, task assignment, single page application, open forum, internal wiki, bpmcontext, private 
Requires at least: 3.5.0
Tested up to: 4.9
Stable tag: 3.1.12
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add a Client Area with private login in your WordPress site. Invite customers to collaborate and share files.

== Description ==

Client Suite is a password protected, single-page area in your WordPress site. Improve collaboration and centralize information about customer activities. Share pages and files with invited customers.

> #### Now includes Contact Form management

> Currently compatible with:

> * Contact Coldform
> * Contact Form 7
> * Ninja Forms (3.0 or later)
> * Quick Contact Form
> * Responsive Contact Form
> * Simple Basic Contact Form

> #### Collaborate with your team in other departments

> Turn inquiries into tasks and assign the inquiry to team members. The workspace pages display your form submission content and includes a place to add and organize text, attachments and discussions. Data from your form fields are saved along with site visitor analytics such as geo location. Admins can configure fields to track approval status and other details too.

> #### Monitor and manage sales, service and support inquiries ####

> Get instant access to all your inquiries. Track data from contact forms by department and get visibility to who is doing what. Contact Plus keeps communication relevant, pushes email alerts to subscribers and streamlines the process for service, sales, marketing and operations.

> #### Visualize your open requests

> The Contact Form Summary section keeps everyone informed when an inquiry is open or closed. Monitor open inquiries assigned to you or your team for every form on your site. Plus, inquiries are geolocated and displayed on a map so you can quickly see where your inquiries originate.

> #### Connect multiple forms

> Do you have more than one form on your website? All of these forms can be connected to one account organized by department and assigned to one person. Multiple people can subscribe to the form and all will get an email alert.

#### Secure and private area on your website ####

* The Login page provides password protected access to your private data. 
* Login is restricted to invited users.
* No need to lock down the entire site.
* Works in multisite.
* Separate role types for internal users, customer users and administrators.

#### Customer user roles ####

* Customer and Customer Location workspaces are structured in a parent-child hierarchy.
* Shared content is created under each of these workspaces.
* Corporate Contact users can view content shared with each office location.
* Company Contact users can only view content shared with their office location.
* Customers cannot see content shared with other customers.

#### Share and collaborate with your team and customers on your website ####

* Keep notes, files & comments in separate pages grouped by topics.
* Track task assignments by open and closed status.
* Set up department portal for sharing forms, policies and documents for internal team members only.
* Administrators can configure which content is shared with customers.

#### Automatic emails alert users about changes ####

* When assignments are created.
* Approvals are required.
* Content is changed.

#### Workspaces create context for collaboration ####

* Workspaces are structured in a parent-child hierarchy.
* Each workspace type is named for a process or type of content that it contains.
* Create new workspaces to publish and share content.
* Each workspace includes areas for content, discussions and uploaded files.
* Administrators decide which content is shared with customers or only with internal team members.
* Create custom workspaces using the Workspace Designer.


This plugin provides Client Suite, the free version of the fully extendable intranet, extranet, workflow service from BPMContext. User administration and setup is managed within the plugin. A BPMContext account is required, which is free and can be setup when you install this plugin.

> This plugin is also compatible with our other plugins including:
>
> * [Intranet Plus](https://wordpress.org/plugins/bpmcontext "Intranet Plus") - intranet features to collaborate with team members
> * [Intranet Plus Dropbox](https://wordpress.org/plugins/bpmcontext-dropbox "Intranet Plus Dropbox") - use Dropbox for file storage

#### Language translations ####

* Portuguese translation - Muito obrigado! Lucas Andade

== Installation ==

A BPMContext account is required, which is free and can be setup when you install this plugin.

1. Upload the plugin files to the `/wp-content/plugins/bpmcontext-client-suite` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin and follow the on-screen directions to get started.
3. Add a customer and customer location workspace page to launch a sharing area for one of your clients. Then invite contacts to share files, meeting notes and action items. 


For help with theme compatibility contact us customer.service@bpmcontext.com


== Frequently Asked Questions ==

= How do I know if Client Suite is a good fit for my organization? =

Client Suite is a good fit for both developers and business users who use WordPress. It is the next step for companies to improve collaboration and communication with customers. 

= How easy is it for the person to use the product? My client is not very tech savvy (her words) and, thus, is looking for a fairly automated system that has a streamlined ease of use for her as well as her clients. =

The user interface is simple. Like email, learn it once and each time you use it is the same regardless of the activity.
Our enterprise customers have many employees that are not technical and they use it with ease.
BPMContext continually reviews and takes feedback regarding the user interface. Small business owners can now implement a streamlined, easy-to-use, system for their employees, customers and suppliers.

= What kind of methods does the product use to keep any of the shared files (as well as client info) secure? =

BPMContext is a service plugin that connects WordPress sites with our servers at Amazon to provide secure content management and file storage.  All requests to and from your clients browsers go over an ssl connection via Ajax but having an SSL is a recommended step in keeping everything secure.  
 
All files that are uploaded are encrypted and stored in Amazon’s S3 service.  Each account has a separate bucket so we never commingle files.  All the content data is stored on Amazon’s RDS and E2C servers in individual databases so once again we never commingle any client data.
 
The backend processes of our service are handled on Amazon as they are more complex than a typical plugin and would not be managed well in a typical WordPress installation.  As such, with the WordPress plugin much of the backend processing that goes on to manage notifications, file storage, extranet security and workflow management is not always visible to the user.  This structure let’s us bring the power of our Intranet, Extranet and Workflow engine to small and medium sized customers.

= What is the administrator role? =

The Administrator manages user setup, billing and deleting files.

= Can I use my existing WordPress site and theme? =

Yes. The application works on most themes. Works best with full-width pages.  Support available if you need assistance.

= Will this work on WP multisite? =

Yes.

= How do I contact you if I have questions? =

Please contact us at customer.service@bpmcontext.com. Please feel free to send a note, bug alerts, enhancements, ideas and feedback.

= Where can I find additional support? = 

Go to [https;//support.bpmcontext.com](https://support.bpmcontext.com "Help Center") for our help center.

== Screenshots ==
1. Secure login so only invited users have access.
2. Your site is built one page at a time. Each new page is added and organized in order of the Context Map.
3. Page layouts are designed to make it easy for your team members to create content or engage. Sections arrange content for Notes, Attachments and a Discussion Area for tracking comments.
4. Users can add pages from the frontend.
5. Invite your team to login to your account.
6. The discussion activity from your team makes it easy to see who is doing what. Click the page to add comments.


== Changelog ==

= 3.1.11 =
* Current version
* Fixed error for dropdown management on workspaces

= 3.1.10 =
* Fixed bug occasioanlly triggered during installation

= 3.1.9 =
* Added Contact Plus features into Client Suite to provide single plugin for both functions
* Minor bug fixes, speed enhancments and theme compatibility improvements

= 3.1.7 =
* Added Portuguese translation - Muito obrigado! Lucas Andade
* Added feature to make the attachments manually sortable (you can set the order using drag-and-drop)
* Minor bug fixes, speed enhancments and theme compatibility improvements

= 3.1.5.1 =
* solution documentation improvements - tips and About this workspace feature
* Minor bug fixes, speed enhancments and theme compatibility improvements

= 3.1.5 =
* Added Delete Item for Calendar feature
* Minor bug fixes and theme compatibility improvements

= 3.1.4 =
* Added Calendar feature
* Added All Client Shared Workspace feature
* Minor bug fixes, speed enhancments and theme compatibility improvements

= 3.1.3 =
* Added search feature
* Created Directory widget
* Customer popup now includes both Customer and Customer Location
* Minor bug fixes and theme compatibility improvements

= 3.0.1 =
* Improved theme compatibility.
* Moved to BPMContext API 3.0.1

== Upgrade Notice ==

= 3.1.12 =
* Fixed error for email validation for long tlds