import cv2
import numpy as np
import pytesseract


def tienXuLy(image, MaTranKhuNhieu):
    image = cv2.resize(image, (600, 800))
    image = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
    image = cv2.erode(image, MaTranKhuNhieu)
    image = cv2.threshold(image, 175, 255, cv2.THRESH_BINARY)[1]
    image = cv2.Canny(image, 230, 255)
    image = cv2.dilate(image, MaTranKhuNhieu, iterations=3)

    return image


def xacDinhBienSo(image):
    cnts, _ = cv2.findContours(image, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
    for c in cnts:
        [x, y, w, h] = cv2.boundingRect(c)
        peri = cv2.arcLength(c, True)
        approx = cv2.approxPolyDP(c, 0.08 * peri, True)

        if len(approx) == 4 and 25000 > cv2.contourArea(c) > 5000 and 2.5*h >= w >= 0.5*h:
            img_crop = original[y:y + h, x:x + w]
            img_crop = cv2.cvtColor(img_crop, cv2.COLOR_BGR2GRAY)
            img_crop = cv2.threshold(img_crop, 160, 255, cv2.THRESH_BINARY)[1]
            cv2.imshow("Crop", img_crop)
            cv2.rectangle(original, (x, y), (x + w, y + h), (127, 255, 127), 3)


img = cv2.imread("images/Xe1.png")
original = cv2.resize(img, (600, 800))
MaTranKhuNhieu = np.ones((3, 3))
img = tienXuLy(img, MaTranKhuNhieu)
xacDinhBienSo(img)
cv2.imshow("Detection", original)
cv2.waitKey(0)