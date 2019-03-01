ls prj | while read a; do
	ls "prj/$a/" | while read b; do
		ls "prj/$a/$b/" | while read c; do
			mkdir -p "prj-s/$a/$b/"
			convert -size 200x200 "prj/$a/$b/$c" -resize 200x200 "prj-s/$a/$b/$c"
			chmod 664 "prj/$a/$b/$c" "prj-s/$a/$b/$c"
			#mogrify -quality 80% "prj-s/$a/$b/$c"
			#mogrify -quality 80% "prj-s/$a/$b/$c"
		done
	done
done
