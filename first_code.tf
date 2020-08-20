	provider "aws" {
	profile = "default"
	region = "US-west-2"
} 

resource "aws_s3_bucket" "tf_course" {
 bucket = "tf-course-20200820"
 acl = "private"
} 
