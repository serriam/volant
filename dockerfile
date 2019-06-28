FROM python:3.7

ENV PYTHONBUFFERED 1

# create root directory

RUN mkdir /obspace_api

# set workdir to current directory
WORKDIR /obspace_api

# copy current contents into the container
ADD ./obspace_api/
