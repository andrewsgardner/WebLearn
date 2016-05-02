/* run 'grunt' to listen for changes */

(function () {
   'use strict';
}());
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                separator: 'rnrn'
            },
            dist: {
                src: ['resources/scripts/*.js'],
                dest: 'public_html/js/main.js'
            }
        },

        uglify: {
            options: {
                banner: '/*! &lt;%= pkg.name %&gt; &lt;%= grunt.template.today("dd-mm-yyyy") %&gt; */n'
            },
            dist: {
                files: {
                    'public_html/js/main.min.js': ['&lt;%= concat.dist.dest %&gt;']
                }
            }
        },

        compass: {
            dist: {
                options: {
                    sassDir: 'resources/scss',
                    cssDir: 'public_html/css',
                    environment: 'development',
                    outputStyle: 'compressed'
                }
            }
        },

        watch: {
            files: ['resources/scss/**/*.scss', 'resources/scripts/*.js'],
            tasks: ['concat', 'uglify', 'compass']
        }

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['concat', 'uglify', 'compass', 'watch']);
};