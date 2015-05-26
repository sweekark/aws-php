<?php
/*
 * Copyright 2013. Amazon Web Services, Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
**/

// Include the SDK using the Composer autoloader
require 'vendor/autoload.php';

use Aws\Ec2\Ec2Client;
 print "Initaializing aws credentials \n";
$ec2Client = Ec2Client::factory(array(
    'key'    => '*********************',
    'secret' => '********************',
    'region' => 'ap-southeast-1' 
));


 print "Initaializing security groups \n";
$securityGroupName = 'launch-wizard-1';
$keyPairName = 'ssh';
 print "Creating an Instance \n";
$result = $ec2Client->runInstances(array(
    'ImageId'        => 'ami-68d8e93a',
    'MinCount'       => 1,
    'MaxCount'       => 1,
    'InstanceType'   => 't2.micro',
    'KeyName'        => $keyPairName,
    'SecurityGroups' => array($securityGroupName),
));
$instanceIds = $result->getPath('Instances/*/InstanceId');

 print "Printing the instance id of the newly created instance \n";
print_r($instanceIds);
