## Install
We need these requirements in composer.json/required:
- `"mongodb/laravel-mongodb": "^5.1"`,
- `"ext-mongodb": "*"`,
- `"ext-mongo": "*"`

Go to docker file: `cd docker`

And run these commands:
`docker-compose build`
`docker-compose up -d`

## Run
We have four routes that you can run CRUD:

- **http://localhost:9080/mongo/create**
- **http://localhost:9080/mongo/read**
- **http://localhost:9080/mongo/update**
- **http://localhost:9080/mongo/delete**

And now check this link: **http://localhost:8081**
