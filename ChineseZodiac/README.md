## Chinese Zodiac Project

Term Project Assignment (TPA) for class. Covers discovery projects
for chapters 1-7.

### Colors

Using [Carved Chinese Box](http://www.colourlovers.com/palette/2038614/Carved_Chinese_Box)

![palette](https://github.com/rothgar/msit570/blob/master/ChineseZodiac/images/color-palatte.png)

hex: FBE4AE
RGB: 251,228,174

hex: DACB8A
RGB: 218,203,138

hex: 897632
RGB: 137,118,50

hex: 392E0E
RGB: 57,46,14

hex: 6BB88A
RGB: 107,184,138

### Buttons

Buttons were generated from [da button factory](http://dabuttonfactory.com/) They can be repeated by using the API available. An example button can be generated with

`curl -O http://dabuttonfactory.com/#t=String%20Functions&f=serif&ts=24&tc=000000&tshs=1&tshc=222222&it=png&c=10&bgt=gradient&bgc=fbe4ae&ebgc=dacb8a&hp=20&vp=11`

Although I think the documented API is currently broken because I had to manually create the buttons.

### Testing

Testing the files can be done with docker. Using the [million12/nginx-php](https://registry.hub.docker.com/u/million12/nginx-php/) image testing can be done with the following commands.

```docker pull million12/nginx-php
sudo docker run -v /home/rothgar/projects/msit570:/data/www/default -p 80:80 --name zodiac -d million12/nginx-php
```

Change -v path to where files are stored. Also make symlink to index.php in that folder for automatic loading.
