module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		less:{
			compile:{
				files: {
					'css/styles.css': ['less/style.less']			
				}
			}
		},

		cssmin: {
			css: {
				src: [
				  'css/styles.css'
				],
				dest: 'css/style.css'
			}
		},
		copy: {
		  main: {
		    files: [

		      // includes files within path and its sub-directories
		     {expand: true, src: ['Scripts/site/metrology.all.min.js'], dest: 'bin/'},
		      {expand: true, src: ['Scripts/site/metrology.all.js'], dest: 'bin/'},
		      {expand: true, src: ['Styles/styles.min.css'], dest: 'bin/', filter: 'isFile'},
		      {expand: true, src: ['Styles/styles.css'], dest: 'bin/', filter: 'isFile'},
		      {expand: true, src: ['Content/images/sprites/**'], dest: 'bin/'},
		      {expand: true, src: ['Content/images/theme-bars/**'], dest: 'bin/'},
		      {expand: true, src: ['Content/images/solutions/css-elements/**'], dest: 'bin/'},
		      {expand: true, src: ['Content/images/legacy/css-elements/**'], dest: 'bin/'},
		      {expand: true, src: ['Fonts/**'], dest: 'bin/'},
		    ],
		  },
		},
		watch: {
			cssFiles: {
				files: ['less/*'],
                tasks: ['less', 'cssmin:css']
			},
			jsFiles: {
				files: ['js/*'],
				tasks: ['concat:js', 'concat:binjs' , 'uglify:js', 'copy'],
				options:{
					spawn:false
				}
			}
		}
	});
	
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-notify');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.registerTask('default', ['less', 'cssmin:css']);

	grunt.event.on('watch', function(action, filepath, target) {
		grunt.log.oklns('Pilsener-Ecuador');
	});
};