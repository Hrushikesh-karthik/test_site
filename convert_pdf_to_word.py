import sys
from pdf2image import convert_from_path # type: ignore
from PIL import Image
import pytesseract
from docx import Document

# Path to tesseract executable
pytesseract.pytesseract.tesseract_cmd = r'C:\Program Files\Tesseract-OCR\tesseract.exe'  # Change if necessary

def pdf_to_word(pdf_path, word_path):
    # Convert PDF to images
    images = convert_from_path(pdf_path)

    # Create a new Word document
    doc = Document()

    for img in images:
        # Use OCR to extract text from the image
        text = pytesseract.image_to_string(img)

        # Add the extracted text to the Word document
        doc.add_paragraph(text)

    # Save the Word document
    doc.save(word_path)

if __name__ == "__main__":
    if len(sys.argv) == 3:
        pdf_path = sys.argv[1]
        word_path = sys.argv[2]
        pdf_to_word(pdf_path, word_path)
    else:
        print("Usage: python convert_pdf_to_word.py <pdf_path> <word_path>")
