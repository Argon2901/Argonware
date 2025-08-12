<?php
include "components.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>I'll Think of a Title Name Later</title>
        <meta charset="UTF-8">
        <meta name="author" content="Collin Thompson">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style><?php include "style.css"; ?></style>

    </head>

    <body>
        <?php echo header_template();?>
        <p>Project status will be updated when I get to it.</p>
        <hr>
        <h1>Projects</h1>
        <h2>Current Projects</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>This Website</td>
            </tr>
            <tr>
                <th>Start Date</th>
                <td>2025-08-07</td>
            </tr>
            <tr>
                <th>End Date</th>
                <td></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre>
                    A website created to give a personal flair to my work, 
                    as well as to motivate me to learn website building.
                    The server is configured by me and hosted on a personal server.
                    The website is mostly built using HTML/CSS, with a few Javascript
                    scripts and information handling using PHP.
                </pre></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Never to be finished</td>
            </tr>
            <tr>
                <th>Link</th>
                <td><a href="https://www.argonware.org/">https://www.argonware.org/</a></td>
            </tr>
            <tr>
                <th>Download</th>
                <td></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Name</th>
                <td>Useless Machine</td>
            </tr>
            <tr>
                <th>Start Date</th>
                <td>2025-08-10</td>
            </tr>
            <tr>
                <th>End Date</th>
                <td></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre>
                    My attempt at replicating a classic "useless machine" design.
                    Uses an Arduino microcontroller and reacts to a switch flip, which it flips back.
                    Box is custom designed out of laser cut plywood or acrylic. 
                </pre></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>In Progress</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>placeholder github link</td>
            </tr>
            <tr>
                <th>Download</th>
                <td></td>
            </tr>
        </table>

        <hr>
        <h2>Past Projects</h2>

        <table>
            <tr>
                <th>Name</th>
                <td>Forcing a microcontroller buzzer to play audio</td>
            </tr>
            <tr>
                <th>Start Date</th>
                <td>2025-04-18</td>
            </tr>
            <tr>
                <th>End Date</th>
                <td>2025-04-22</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre>
                    Technically for a final for the class "Microcontrollers",
                    I programmed a TI microcontroller and expansion board to play complex
                    audio using the buzzer present on the board. Since the microcontroller had
                    only PWM generators on board, I had to wrangle those to make the buzzer waveform
                    similar to the PCM modulation the audio files came in. It only seemed to work in
                    certain circumstances, and I was only ever able to get my scream sample to work.

                    I also had to externally make tools to dump the audio file into a form which C
                    could recognize, as, as far as I was aware, there was no other way to get the
                    audio file onto the microcontroller.

                    The final version does unfortunately appear to be lost to time, as this was 
                    programmed on a "deep freeze" lab computer that resets its image every boot
                    and the lab class was unpublished, so I don't have access to the submission.
                </pre></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Phyrric Victory</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>N/A</td>
            </tr>
            <tr>
                <th>Download</th>
                <td>N/A</td>
            </tr>
        </table>

        <hr>
        <h2>Schoolwork</h2>
        <table>
            <tr>
                <th>Class Name</th>
                <td>Operating Systems</td>
            </tr>
            <tr>
                <th>Semester</th>
                <td>Spring 2025</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre>
                    This class involved the modification of the unix-like operating system XV6.
                    Throughout the course of this I implemented several syscalls for the kernel,
                    as well as lazy memory management for programs. It definitely piqued my interest
                    for operating system development, and I'm going to attempt to make my own
                    in the near future.
                </pre></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Completed</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>placeholder github link</td>
            </tr>
            <tr>
                <th>Download</th>
                <td></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Class Name</th>
                <td>Programming Languages</td>
            </tr>
            <tr>
                <th>Semester</th>
                <td>Fall 2024</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre>
                    In this class I made an interpreter and cross compiler from the Cminus language 
                    to MIPS assembly. 
                </pre></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Completed</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>placeholder github link</td>
            </tr>
            <tr>
                <th>Download</th>
                <td></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Class Name</th>
                <td>Computer Architecture</td>
            </tr>
            <tr>
                <th>Semester</th>
                <td>Spring 2024</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre>
                    This class had me model the efficiency of different cache configurations, 
                    where I implemented a software model of a cache and counted its efficiency
                    (misses, hits, cycles) given a series of test cache calls.
                </pre></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Completed</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>placeholder github link</td>
            </tr>
            <tr>
                <th>Download</th>
                <td></td>
            </tr>
        </table>
        
        <table>
            <tr>
                <th>Class Name</th>
                <td>Concurrent Programming</td>
            </tr>
            <tr>
                <th>Semester</th>
                <td>Fall 2023</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre>
                    I programmed solutions to classic concurrency problems created by Edsgar 
                    Dijkstra. The projects were made in C++ using fork and exec, as well as my
                    professor's user thread library, "ThreadMonitor". Considering the quality of
                    ThreadMonitor, I've long since switched to using kernel threads for any concurrent 
                    computing. 
                </pre></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Completed</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>placeholder github link</td>
            </tr>
            <tr>
                <th>Download</th>
                <td></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Class Name</th>
                <td>Systems programming</td>
            </tr>
            <tr>
                <th>Semester</th>
                <td>Fall 2023</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre>
                    This class involved the usage of system calls within programming, as well
                    as complex data manipulation with C. The projects were simple, but introduced 
                    the idea of pipes and using network packet algorithms like UDP.
                </pre></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Completed</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>placeholder github link</td>
            </tr>
            <tr>
                <th>Download</th>
                <td></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Class Name</th>
                <td>Computer Organization</td>
            </tr>
            <tr>
                <th>Semester</th>
                <td>Spring 2023</td>
            </tr>
            <tr>
                <th>Description</th>
                <td><pre>
                    This class had us learn under Tony Dal Santo, an aerospace engineer.
                    While the class was supposed to be something along the lines of the equivalent EE
                    course "Digital Logic", Tony had decided that we didn't need to learn that, and 
                    instead tailored his assignments around fire hardening us into excellent programmers.
                    And fire harden us this class did

                    Within either C++ or C, my personal choice being C++, I was tasked with creating and 
                    expanding upon an emulator concept for a simple 8 instruction ISA. Modeling the individual
                    components of the computer, the emulator would execute code samples given to us.

                    While hard, this project forged me and everybody else into excellent programmers. What
                    most of all I took out of this class was the experience of integrating multiple
                    individual components.  
                </pre></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Survived</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>placeholder github link</td>
            </tr>
            <tr>
                <th>Download</th>
                <td></td>
            </tr>
        </table>
    </body>
</html>