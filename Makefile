.PHONY:style.min.css

all: style.min.css

style.min.css:
	python -m scss.tool -C < scss/style.scss > style.min.css
