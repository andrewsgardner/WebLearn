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
                dest: 'public_html/js/main.v1.2.js'
            }
        },

        uglify: {
            options: {
                banner: '/* Theme Name: WebLearn | Version: 1.2 */\n'
            },
            dist: {
                files: {
                    'public_html/js/main.min.v1.2.js': ['public_html/js/main.v1.2.js']
                }
            }
        },
        
        sass: {
            options: {
                sourceMap: false,
                sourceComments: false
            },
            dist: {
                files: {
                    'public_html/css/main.v1.2.css': 'resources/scss/main.v1.2.scss'
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