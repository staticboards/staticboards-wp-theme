.PHONY:style.min.css

all: style.min.css

style.min.css:
	python -m scss.tool < scss/style.scss > style.min.css
