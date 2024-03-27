# 1. Create the PHP image

```shell
$ docker build -t mboulgoudan/arm64v8-php8.3fpm .
```

# 2. Create a tag (to use instead of latest)

```shell
$ docker image tag mboulgoudan/arm64v8-php8.3fpm:latest mboulgoudan/arm64v8-php8.3fpm:8.3fpm
```

# 3. Show the new created images

```shell
$ docker image ls | grep mboulgoudan
mboulgoudan/arm64v8-php8.3fpm                   8.3fpm            6149e0114fc0   51 minutes ago   563MB
mboulgoudan/arm64v8-php8.3fpm                   latest            6149e0114fc0   51 minutes ago   563MB
```

# 4. Login to DockerHub

```shell
$ docker login
docker login 
Log in with your Docker ID or email address to push and pull images from Docker Hub. If you don't have a Docker ID, head over to https://hub.docker.com/ to create one.
You can log in with your password or a Personal Access Token (PAT). Using a limited-scope PAT grants better security and is required for organizations using SSO. Learn more at https://docs.docker.com/go/access-tokens/

Username: moustapha.boulgoudan@gmail.com
Password: 
Login Succeeded
```

# 5. Push the new image to DockerHub

```shell
$ docker image push mboulgoudan/arm64v8-php8.3fpm:8.3fpm
The push refers to repository [docker.io/mboulgoudan/arm64v8-php8.3fpm]
5f70bf18a086: Pushed 
2d3d3115c0a4: Pushed 
f7cc84cb6412: Pushed 
51d0ef6bc2e8: Mounted from arm64v8/php 
a6e4ff5ba9ec: Mounted from arm64v8/php 
e34add89d288: Mounted from arm64v8/php 
4ade61e2c61f: Mounted from arm64v8/php 
d307130fc8c5: Mounted from arm64v8/php 
950b12b281af: Mounted from arm64v8/php 
276ef1748f56: Mounted from arm64v8/php 
bc862653c43d: Mounted from arm64v8/php 
40e1f0f087f9: Mounted from arm64v8/php 
d64c46ff900c: Mounted from arm64v8/php 
8.3fpm: digest: sha256:1c4d270386279cb50c08d42e0d86880cea163ec5766c861f59756636fa86be8d size: 3038
```
