[![Python application test with Github Actions](https://github.com/Akebs/multi-cloud/actions/workflows/main.yml/badge.svg)](https://github.com/Akebs/multi-cloud/actions/workflows/main.yml)

# Cloud Services Testing (AWS,GCP,Azure)


This a Amazon Web Services, Google Cloud Platform and Microsoft Azure implementation of Pragmatic AI Labs tutorial: "1:1 multi cloud onboarding with cloud computing"

<a href="https://youtu.be/zznvjk0zsVg">  <img src="https://i.ytimg.com/vi/zznvjk0zsVg/maxresdefault.jpg" width="480" > </a>


It creates a python app, in these cloud platforms, that adds two given values.
It also includes a Github Actions workflow to install list, test and format the code. Upon conclusion, it refreshes the execution success badge on top.

A Django frame is used to generate a simple form view to input integer values and display the add result.


Required local modifications in settings.py are in included folders for each cloud provider.

    AWS & Azure: ALLOWED_HOSTS is set to include the value of the CNAME/WEBSITE_HOSTNAME environment variable, if present. Cloud providers automatically sets this environment variable upon deployment to the app's URL.

    AWS & Azure: The DATABASES object is commented out (using """) so that the app doesn't attempt to use a database at all. To use a database, remove the comments and modify the values as appropriate for your database.

