# API
## POST : host/createsala
### with "name" as request, creates a new sala in database with that name.
## POST : host/createsilla
### with "id" as request, creates a new silla in database with that sala "id" as foreign key of the sala where the silla is.
## POST : host/updatesilla
### with "id" as request, updates the state of ocupada, if it where true, it's became false and vice versa
## POST : host/deletesala
### with "id" as request, delete that sala and its sillas
## POST : host/deletesilla
### with "id" as request, delete that silla

## GET : host/getallsalas
### returns all sala data from database
## GET : host/getsillas/{id}
### returns all sillas with that sala "is" as foreign key