PGDMP                         {            konecta    15.4    15.4                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            	           1262    16398    konecta    DATABASE     }   CREATE DATABASE konecta WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE konecta;
                postgres    false                        2615    16419    prueba    SCHEMA        CREATE SCHEMA prueba;
    DROP SCHEMA prueba;
                postgres    false            �            1259    16475 	   productos    TABLE     �  CREATE TABLE prueba.productos (
    id integer NOT NULL,
    nombre_producto character varying(100) NOT NULL,
    referencia character varying(100) NOT NULL,
    precio integer NOT NULL,
    peso integer NOT NULL,
    categoria character varying(100) NOT NULL,
    stock integer NOT NULL,
    estado character varying(1) NOT NULL,
    fecha_creacion time with time zone NOT NULL,
    fecha_modificacion time with time zone
);
    DROP TABLE prueba.productos;
       prueba         heap    postgres    false    6            �            1259    16474    productos_id_seq    SEQUENCE     �   CREATE SEQUENCE prueba.productos_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE prueba.productos_id_seq;
       prueba          postgres    false    6    216            
           0    0    productos_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE prueba.productos_id_seq OWNED BY prueba.productos.id;
          prueba          postgres    false    215            �            1259    16483    ventas    TABLE        CREATE TABLE prueba.ventas (
    id integer NOT NULL,
    id_producto integer NOT NULL,
    cantidad integer NOT NULL,
    estado character varying(1) NOT NULL,
    fecha_creacion time with time zone NOT NULL,
    fecha_modificacion time with time zone
);
    DROP TABLE prueba.ventas;
       prueba         heap    postgres    false    6            �            1259    16482    ventas_id_seq    SEQUENCE     �   CREATE SEQUENCE prueba.ventas_id_seq
    AS integer
    START WITH 1000
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE prueba.ventas_id_seq;
       prueba          postgres    false    6    218                       0    0    ventas_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE prueba.ventas_id_seq OWNED BY prueba.ventas.id;
          prueba          postgres    false    217            k           2604    16478    productos id    DEFAULT     l   ALTER TABLE ONLY prueba.productos ALTER COLUMN id SET DEFAULT nextval('prueba.productos_id_seq'::regclass);
 ;   ALTER TABLE prueba.productos ALTER COLUMN id DROP DEFAULT;
       prueba          postgres    false    216    215    216            l           2604    16486 	   ventas id    DEFAULT     f   ALTER TABLE ONLY prueba.ventas ALTER COLUMN id SET DEFAULT nextval('prueba.ventas_id_seq'::regclass);
 8   ALTER TABLE prueba.ventas ALTER COLUMN id DROP DEFAULT;
       prueba          postgres    false    218    217    218                      0    16475 	   productos 
   TABLE DATA           �   COPY prueba.productos (id, nombre_producto, referencia, precio, peso, categoria, stock, estado, fecha_creacion, fecha_modificacion) FROM stdin;
    prueba          postgres    false    216   #                 0    16483    ventas 
   TABLE DATA           g   COPY prueba.ventas (id, id_producto, cantidad, estado, fecha_creacion, fecha_modificacion) FROM stdin;
    prueba          postgres    false    218   O                  0    0    productos_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('prueba.productos_id_seq', 22, true);
          prueba          postgres    false    215                       0    0    ventas_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('prueba.ventas_id_seq', 8, true);
          prueba          postgres    false    217            n           2606    16480    productos productos_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY prueba.productos
    ADD CONSTRAINT productos_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY prueba.productos DROP CONSTRAINT productos_pkey;
       prueba            postgres    false    216            p           2606    16488    ventas ventas_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY prueba.ventas
    ADD CONSTRAINT ventas_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY prueba.ventas DROP CONSTRAINT ventas_pkey;
       prueba            postgres    false    218            q           2606    16490    ventas fk_ventas_productos    FK CONSTRAINT     �   ALTER TABLE ONLY prueba.ventas
    ADD CONSTRAINT fk_ventas_productos FOREIGN KEY (id_producto) REFERENCES prueba.productos(id) NOT VALID;
 D   ALTER TABLE ONLY prueba.ventas DROP CONSTRAINT fk_ventas_productos;
       prueba          postgres    false    3182    216    218                 x�e��j�0���S�^:$ي���c��K���etɓ��b�R�}�~�2��u|��i| 8�{DA D����O�ߟ����_� cB�g����3��PN��x���*��e���"<�o�0� �&/�����Sn�F�}�k[�6��2S���&����jO��F�ݬ��1�<B\��*����R���٩Y�6���T[���[Jn�/����J�Q���k�v����l�Tެt�sB�JE̤�(I�A�5��sr�8|~l����O         o   x�U���PC�f���ORq�U��s�5�8X��LS��ؾB���/ث���<0j���H��h��F�¦�@&�d<5�Y�*��n�>���]ާ���,�KDv��$�     