# To build this stuff, you need the linuxdoc tools and htmldoc.  On Debian,
# this means: linuxdoc-tools linuxdoc-tools-text htmldoc
#
#  - mdz

TARGETS = mvpmc-HOWTO.txt mvpmc-HOWTO.html mvpmc-HOWTO-singlehtml.html mvpmc-HOWTO.pdf index.html
LINUXDOC_HTML_SPLIT := 1

all: $(TARGETS)
clean:
	rm -f $(TARGETS) $(patsubst %.html,%-[0-9]*.html,$(filter %.html,$(TARGETS)))
distclean: clean

validate: mvpmc-HOWTO.sgml
	linuxdoc -B check $<

%.txt: %.sgml
	linuxdoc -B txt $<

# Generate PDF via LaTeX using linuxdoc
#%.pdf: %.sgml
#	linuxdoc -B latex -o pdf $<

# Generate PDF via HTML using htmldoc
%.pdf: %-singlehtml.html
	# htmldoc exits unsuccessfully for no good reason -mdz
	htmldoc --book --quiet --outfile $@ $< || true

%.html: %.sgml
	linuxdoc -B html --split=$(LINUXDOC_HTML_SPLIT) --toc=2 $<

%-singlehtml.html: LINUXDOC_HTML_SPLIT=0
%-singlehtml.sgml: %.sgml
	cp $< $@

index.html: mvpmc-HOWTO.html
	cp $< $@
