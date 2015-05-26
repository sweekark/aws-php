# aws-php

##Create a new aws account
http://aws.amazon.com/account/

##Created new instance from the dashboard console to get the flow
https://ap-southeast-1.console.aws.amazon.com/console/home?region=ap-southeast-1

##Install aws cli to run some cli commands
used pip install awscli
http://docs.aws.amazon.com/cli/latest/userguide/installing.html#install-with-pip

##Installed and setup EC2 Command Line Interface Tools 
http://docs.aws.amazon.com/AWSEC2/latest/CommandLineReference/ec2-cli-get-set-up.html

#Now tested ec2 run instance on command line
ec2-run-instances ami-68d8e93a -t t2.micro -k ssh -g launch-wizard-1 --region ap-southeast-1

#Downloaded php sdk for aws
http://aws.amazon.com/sdk-for-php/

#configure the sample script 
* Create a key value pair
* create a security group
* mention the region you want the instance to be created
