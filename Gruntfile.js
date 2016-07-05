/* run 'grunt' to listen for changes */

(function () {
   'use strict';
}());
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['resources/scripts/*.js'],
                dest: 'html/js/main.js'
            }
        },

        uglify: {
            options: {
                banner: '/*! &lt;%= pkg.name %&gt; &lt;%= grunt.template.today("dd-mm-yyyy") %&gt; */\n'
            },
            dist: {
                files: {
                    'html/js/main.min.js': ['html/js/main.js']
                }
            }
        },
        
        sass: {
            options: {
                sourceMap: true,
                sourceComments: false
            },
            dist: {
                files: {
                    'html/css/main.css': 'resources/scss/main.scss'
                }
            }
        },

        watch: {
            files: ['resources/scss/**/*.scss', 'resources/scripts/*.js'],
            tasks: ['concat', 'uglify', 'sass']
        }

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['concat', 'uglify', 'sass', 'watch']);
};