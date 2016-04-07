set key left
set lmargin 3
set size square 0.40
set terminal postscript portrait "default" 8
set output "./fig/up.eps"
set pointsize 0.5
load './fig/data/poly.12617'
plot [0:1] t99(x) title '', './fig/data/data.12617' title '' with points 4
