# BMP Implementation

A PHP Based implementation of the [BMP File Format](https://en.wikipedia.org/wiki/BMP_file_format).

## Motivation

I haven't worked with binary files that much yet and was intrested in learning more about them. Therefore, I've set the goal to implement the BMP file format in
PHP.

To challange myself I've decided that the only sources I am allowed to use are [php.net](php.net) and this version of
the [BMP File Format documentation](http://www.ece.ualberta.ca/~elliott/ee552/studentAppNotes/2003_w/misc/bmp_file_format/bmp_file_format.htm) documentation.
The main goal is to be able to read and write bmp images.

## Project requirements

To consider this project as done, it must contain the code to do the following:

1. Read individual pixel values from [example.bmp](example.bmp)
1. Be able to display image information, this must include:
    - Height
    - Width
    - Colors
1. Modify [example.bmp](example.bmp), modifications include:
    - Swap the sides of the image (so the left half becomes the right half, and vice versa)
    - Convert the white background to another color
1. Generate an image, matching specifications:
    - Should contain a square of 100px high
    - The square should have a 5px red border
    - The square should have a green filling
    - The square should be centered in the image
    - The image should be 300px in width
    - The image should be 200px in height
