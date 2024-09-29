# Use the official MySQL image as a base
FROM mysql:latest

# Set the working directory to /app
WORKDIR /app

# Copy the current directory contents into the container at /app
ADD . /app

# Set the default user for the MySQL image
USER mysql

# Set rnvironment variable for root MySql
ENV MYSQL_ROOT_PASSWORD=root

# Set environment variables for the new user
ENV MYSQL_USER=external_user
ENV MYSQL_PASSWORD=password
ENV MYSQL_DATABASE=my_database

# Expose port 3306 to allow connections to the database
EXPOSE 3306

# Start the MySQL server when the container is run
CMD ["mysqld"]
