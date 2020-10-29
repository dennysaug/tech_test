##Tested on Linux

If you want run it on docker:

    docker-compose up --build
    
    open a new terminal and type: docker exec -it php
    su <your-user>
 
else:
    
        php artisan serve
        

    
    
    
##Endpoints:

_[1]_

var: company_id (int), name (string), phone (string)

**POST** localhost/api/contact

**PUT** localhost/api/contact/6

_[2]_

**GET** localhost/api/contact

_[3]_

**GET** localhost/api/contact/37

_[4]_

Done.

_[5]_

var: contact_id (int), text (string)

**POST** localhost/api/note

_[6]_

**GET** localhost/api/company/67

_[7]_

**GET** localhost/api/company

_[8]_

**GET** localhost/api/company/search/em

##Postman Collections
https://www.getpostman.com/collections/f6d9c8de14346760a68b
