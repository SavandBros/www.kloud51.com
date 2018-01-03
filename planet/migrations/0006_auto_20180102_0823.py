# -*- coding: utf-8 -*-
# Generated by Django 1.11.7 on 2018-01-02 04:23
from __future__ import unicode_literals

from django.db import migrations, models
import djangocms_text_ckeditor.fields


class Migration(migrations.Migration):

    dependencies = [
        ('planet', '0005_auto_20171205_1307'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='product',
            name='description_hi',
        ),
        migrations.RemoveField(
            model_name='product',
            name='description_ru',
        ),
        migrations.RemoveField(
            model_name='product',
            name='info_hi',
        ),
        migrations.RemoveField(
            model_name='product',
            name='info_ru',
        ),
        migrations.RemoveField(
            model_name='product',
            name='label_hi',
        ),
        migrations.RemoveField(
            model_name='product',
            name='label_ru',
        ),
        migrations.RemoveField(
            model_name='product',
            name='name_hi',
        ),
        migrations.RemoveField(
            model_name='product',
            name='name_ru',
        ),
        migrations.RemoveField(
            model_name='product',
            name='order_link_hi',
        ),
        migrations.RemoveField(
            model_name='product',
            name='order_link_ru',
        ),
        migrations.RemoveField(
            model_name='product',
            name='slug_hi',
        ),
        migrations.RemoveField(
            model_name='product',
            name='slug_ru',
        ),
        migrations.RemoveField(
            model_name='productgroup',
            name='description_hi',
        ),
        migrations.RemoveField(
            model_name='productgroup',
            name='description_ru',
        ),
        migrations.RemoveField(
            model_name='productgroup',
            name='name_hi',
        ),
        migrations.RemoveField(
            model_name='productgroup',
            name='name_ru',
        ),
        migrations.RemoveField(
            model_name='productgroup',
            name='slug_hi',
        ),
        migrations.RemoveField(
            model_name='productgroup',
            name='slug_ru',
        ),
        migrations.RemoveField(
            model_name='section',
            name='description_hi',
        ),
        migrations.RemoveField(
            model_name='section',
            name='description_ru',
        ),
        migrations.RemoveField(
            model_name='section',
            name='sub_title_hi',
        ),
        migrations.RemoveField(
            model_name='section',
            name='sub_title_ru',
        ),
        migrations.RemoveField(
            model_name='section',
            name='title_hi',
        ),
        migrations.RemoveField(
            model_name='section',
            name='title_ru',
        ),
        migrations.RemoveField(
            model_name='sectionitem',
            name='description_hi',
        ),
        migrations.RemoveField(
            model_name='sectionitem',
            name='description_ru',
        ),
        migrations.RemoveField(
            model_name='sectionitem',
            name='external_link_hi',
        ),
        migrations.RemoveField(
            model_name='sectionitem',
            name='external_link_ru',
        ),
        migrations.RemoveField(
            model_name='sectionitem',
            name='title_hi',
        ),
        migrations.RemoveField(
            model_name='sectionitem',
            name='title_ru',
        ),
        migrations.RemoveField(
            model_name='team',
            name='name_hi',
        ),
        migrations.RemoveField(
            model_name='team',
            name='name_ru',
        ),
        migrations.RemoveField(
            model_name='teammember',
            name='bio_hi',
        ),
        migrations.RemoveField(
            model_name='teammember',
            name='bio_ru',
        ),
        migrations.RemoveField(
            model_name='teammember',
            name='name_hi',
        ),
        migrations.RemoveField(
            model_name='teammember',
            name='name_ru',
        ),
        migrations.AddField(
            model_name='product',
            name='description_fa',
            field=djangocms_text_ckeditor.fields.HTMLField(null=True, verbose_name='description'),
        ),
        migrations.AddField(
            model_name='product',
            name='info_fa',
            field=models.CharField(blank=True, max_length=250, null=True, verbose_name='info'),
        ),
        migrations.AddField(
            model_name='product',
            name='label_fa',
            field=models.CharField(blank=True, max_length=100, null=True, verbose_name='label'),
        ),
        migrations.AddField(
            model_name='product',
            name='name_fa',
            field=models.CharField(max_length=50, null=True, verbose_name='name'),
        ),
        migrations.AddField(
            model_name='product',
            name='order_link_fa',
            field=models.URLField(null=True),
        ),
        migrations.AddField(
            model_name='product',
            name='slug_fa',
            field=models.SlugField(null=True, unique=True, verbose_name='slug'),
        ),
        migrations.AddField(
            model_name='productgroup',
            name='description_fa',
            field=djangocms_text_ckeditor.fields.HTMLField(null=True, verbose_name='description'),
        ),
        migrations.AddField(
            model_name='productgroup',
            name='name_fa',
            field=models.CharField(max_length=50, null=True, verbose_name='name'),
        ),
        migrations.AddField(
            model_name='productgroup',
            name='slug_fa',
            field=models.SlugField(null=True, unique=True, verbose_name='slug'),
        ),
        migrations.AddField(
            model_name='section',
            name='description_fa',
            field=djangocms_text_ckeditor.fields.HTMLField(blank=True, null=True, verbose_name='description'),
        ),
        migrations.AddField(
            model_name='section',
            name='sub_title_fa',
            field=models.CharField(blank=True, max_length=250, null=True, verbose_name='sub title'),
        ),
        migrations.AddField(
            model_name='section',
            name='title_fa',
            field=models.CharField(help_text='Public title of the section, visitors will be able to see it.', max_length=250, null=True, verbose_name='title'),
        ),
        migrations.AddField(
            model_name='sectionitem',
            name='description_fa',
            field=djangocms_text_ckeditor.fields.HTMLField(blank=True, null=True, verbose_name='description'),
        ),
        migrations.AddField(
            model_name='sectionitem',
            name='external_link_fa',
            field=models.URLField(blank=True, null=True, verbose_name='external link'),
        ),
        migrations.AddField(
            model_name='sectionitem',
            name='title_fa',
            field=models.CharField(max_length=250, null=True, verbose_name='title'),
        ),
        migrations.AddField(
            model_name='team',
            name='name_fa',
            field=models.CharField(max_length=50, null=True, verbose_name='name'),
        ),
        migrations.AddField(
            model_name='teammember',
            name='bio_fa',
            field=models.TextField(null=True, verbose_name='bio'),
        ),
        migrations.AddField(
            model_name='teammember',
            name='name_fa',
            field=models.CharField(max_length=100, null=True, verbose_name='name'),
        ),
    ]