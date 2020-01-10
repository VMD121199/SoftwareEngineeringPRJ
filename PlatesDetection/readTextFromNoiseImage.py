import cv2
import pytesseract
import re

pytesseract.pytesseract.tesseract_cmd = r"Tesseract-OCR\\tesseract.exe"

img = cv2.imread("TestCase/Test7.png")
print("Trước khi khử nhiễu:\n", pytesseract.image_to_string(img))
img = cv2.resize(img, (1008, 756))
# cv2.imshow("original", img)
gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
cv2.imshow("Gray", gray)
#Bộ lọc Gauss
gaussBlur = cv2.GaussianBlur(gray, (15, 15), 0)
#Bộ lọc trung bình
mediumBlur = cv2.blur(gray, (15, 15))
#Bộ lọc hai chiều
bilateralFilter = cv2.bilateralFilter(gray, 11, 75, 75)
#Bộ lọc trung vị
medianBlur = cv2.medianBlur(gray, 9)

#Sử dụng bộ lọc trung vị để lọc làm mờ ảnh
blurred = medianBlur
cv2.imshow("blurred image", blurred)
thresh = cv2.threshold(blurred, 0, 255, cv2.THRESH_OTSU)[1]
cv2.imshow("binary image", thresh)
conts, he = cv2.findContours(thresh, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)

img_crop = []
for c in reversed(conts):
    [x, y, w, h] = cv2.boundingRect(c)
    if w < 100 and h < 100:
        continue
    cv2.rectangle(thresh, (x, y), (x + w, y + h), 255, 5)
    img_crop.append(thresh[y:y + h, x:x + w])

print("Sau khi xử lý ảnh để tăng độ chính xác:")
for i in img_crop:
    cv2.waitKey(0)
    text = pytesseract.image_to_string(i, lang="vie+eng")
    text = re.sub('\n\n', '\n', text)
    print(text)