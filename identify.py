import ddddocr

ocr=ddddocr.DdddOcr()
with open('1.png','rb') as f:
    img_bytes=f.read()
print('img="'+ocr.classification(img_bytes)+'"')