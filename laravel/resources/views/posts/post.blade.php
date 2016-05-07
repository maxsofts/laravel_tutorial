@extends('templates.dashboard')
@section('content_post')
    <h1 class="title">Quản lí bài viết</h1>
    <div class="content_post">

        <table cellpadding="10px" border="1" width="100%" class="table">
            <tr>
                <td>Stt</td>
                <td>Name</td>
                <td>Excerpt</td>
                <td>Sửa</td>
                <td>Xóa</td>
            </tr>
            <?php
             $count=0;
            foreach($getpost as $post){
                $count++;
            ?>
            <tr>
                <td><?php echo $count;?></td>
                <td> <a href="#"><?php echo $post->name;?></a> </td>
                <td><?php echo $post->Excerpt;?></td>
                <td><a class="edit" href="#">Sửa</a></td>
                <td><a class="delete" href="#">Xóa</a></td>
            </tr>
            <?php
            }
            ?>
        </table>


    </div>

@stop