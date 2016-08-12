# My Processwire intermediate modules

- **RedirectAdminPages** - redirect specific user role to a custom page set in the module config.
    - This module shows how to implement module configuration,
    - using variables saved in the admin,
    - redirecting a user using `session->redirect()`

- **TextformatterFindReplace** - adds Textformatter to text field formatters so so that you can find and replace text in the frontend
    - example of module extending Textformatter

- **PageDeferredPublish** - adds Publish later buttons to Page Tree and Page Edit pages which allow a page to be drafted and then published at some time interval in the future. Defaults to 24hrs.
    - example of using a required module
    - using LazyCron module to run functions
    - installing fields
    - saving page fields within a module 

[Also checkout My Processwire beginner modules](https://github.com/benbyford/PW-starter-modules/)
