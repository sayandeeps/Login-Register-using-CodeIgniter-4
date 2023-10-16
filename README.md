# CodeIgniter 4 Login and Register Project

This is a simple login and register project built with CodeIgniter 4 and MySQL.

## Getting Started

Follow these steps to set up the project on your local machine.

### 1. Create a New CodeIgniter 4 Project

To create a new CodeIgniter 4 project, use the `composer create-project` command with the `codeigniter4/appstarter` template. Run the following command in your terminal:

```bash
composer create-project codeigniter4/appstarter <Your_project_name>
```

### 2. Clone This Repository

Clone this repository into the <Your_project_name> directory that was created in the previous step. Use the following command, replacing <your_repository_url> with the URL of your existing repository:

```
git clone <this_repository_url> newproject
```

During the cloning process, Git will attempt to merge your repository with the existing newproject. Git will automatically handle the merge for files that exist in both repositories. If there are conflicts, you will need to resolve them manually.

### 3. Review and Modify Project Files

After cloning and merging, you can review and modify any files that are different between your project and the `appstarter` template as needed. Customize the project to fit your specific requirements, such as the login and registration functionality.

### 4. Set Up Configurations and Dependencies

Set up any specific configurations, dependencies, or environment variables that are unique to your project. Ensure that your database connection is properly configured in the `.env` file, and create necessary database tables if required.

### 5. Run Database Migrations

To create the necessary database tables for your login and registration functionality, run the database migrations using CodeIgniter's php spark migrate command (Migration code already avaialble in app/database/migrations):

```
cd newproject
php spark migrate
```

### 6. Usage

You can now start using the login and registration functionality in your CodeIgniter 4 project. Access the application through a web browser and test the features.

### 5. License

This project is licensed under the [MIT License](https://github.com/sayandeeps/login_register_using_CI4/blob/main/LICENSE.md).
