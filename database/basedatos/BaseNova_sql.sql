PGDMP                         {            Libros    15.2    15.2 �               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16567    Libros    DATABASE        CREATE DATABASE "Libros" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Venezuela.1252';
    DROP DATABASE "Libros";
                postgres    false            �            1259    49897 
   categories    TABLE     �   CREATE TABLE public.categories (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    description character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.categories;
       public         heap    postgres    false            �            1259    49896    categories_id_seq    SEQUENCE     z   CREATE SEQUENCE public.categories_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.categories_id_seq;
       public          postgres    false    224                       0    0    categories_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.categories_id_seq OWNED BY public.categories.id;
          public          postgres    false    223            �            1259    50118    clientes    TABLE     ~  CREATE TABLE public.clientes (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    cedula character varying(255) NOT NULL,
    rif character varying(255),
    address character varying(255),
    phone character varying(255) NOT NULL,
    email character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.clientes;
       public         heap    postgres    false            �            1259    50117    clientes_id_seq    SEQUENCE     x   CREATE SEQUENCE public.clientes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.clientes_id_seq;
       public          postgres    false    252                       0    0    clientes_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.clientes_id_seq OWNED BY public.clientes.id;
          public          postgres    false    251            �            1259    49940    clients    TABLE     }  CREATE TABLE public.clients (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    cedula character varying(255) NOT NULL,
    rif character varying(255),
    address character varying(255),
    phone character varying(255) NOT NULL,
    email character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.clients;
       public         heap    postgres    false            �            1259    49939    clients_id_seq    SEQUENCE     w   CREATE SEQUENCE public.clients_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.clients_id_seq;
       public          postgres    false    230                       0    0    clients_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.clients_id_seq OWNED BY public.clients.id;
          public          postgres    false    229            �            1259    50140    compras    TABLE     �   CREATE TABLE public.compras (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_provider bigint NOT NULL
);
    DROP TABLE public.compras;
       public         heap    postgres    false            �            1259    50139    compras_id_seq    SEQUENCE     w   CREATE SEQUENCE public.compras_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.compras_id_seq;
       public          postgres    false    254                       0    0    compras_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.compras_id_seq OWNED BY public.compras.id;
          public          postgres    false    253            �            1259    16593    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    16592    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    220                       0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    219            �            1259    16569 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    16568    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    215                       0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    214            �            1259    16586    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            �            1259    49885    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    49884    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    222                       0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    221                        1259    50147    producto_comprados    TABLE     N  CREATE TABLE public.producto_comprados (
    id bigint NOT NULL,
    id_compra bigint NOT NULL,
    description character varying(255) NOT NULL,
    code character varying(255) NOT NULL,
    precio numeric(12,2) NOT NULL,
    cantidad numeric(12,2) NOT NULL,
    status character varying(255) DEFAULT 'VALID'::character varying NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT producto_comprados_status_check CHECK (((status)::text = ANY ((ARRAY['VALID'::character varying, 'CANCELED'::character varying])::text[])))
);
 &   DROP TABLE public.producto_comprados;
       public         heap    postgres    false            �            1259    50146    producto_comprados_id_seq    SEQUENCE     �   CREATE SEQUENCE public.producto_comprados_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.producto_comprados_id_seq;
       public          postgres    false    256                       0    0    producto_comprados_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.producto_comprados_id_seq OWNED BY public.producto_comprados.id;
          public          postgres    false    255            �            1259    50076 	   productos    TABLE     �  CREATE TABLE public.productos (
    id bigint NOT NULL,
    category_id bigint NOT NULL,
    code character varying(255),
    name character varying(255) NOT NULL,
    description character varying(255),
    precio_compra numeric(12,2) NOT NULL,
    precio_venta numeric(12,2) NOT NULL,
    stock numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    image character varying(255) NOT NULL,
    unit character varying(255) NOT NULL,
    status character varying(255) DEFAULT 'ACTIVE'::character varying NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT productos_status_check CHECK (((status)::text = ANY ((ARRAY['ACTIVE'::character varying, 'DESACTIVED'::character varying])::text[])))
);
    DROP TABLE public.productos;
       public         heap    postgres    false            �            1259    50075    productos_id_seq    SEQUENCE     y   CREATE SEQUENCE public.productos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.productos_id_seq;
       public          postgres    false    246                       0    0    productos_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.productos_id_seq OWNED BY public.productos.id;
          public          postgres    false    245            �            1259    50104    productos_vendidos    TABLE     b  CREATE TABLE public.productos_vendidos (
    id bigint NOT NULL,
    id_venta bigint NOT NULL,
    description character varying(255) NOT NULL,
    code character varying(255) NOT NULL,
    precio numeric(12,2) NOT NULL,
    cantidad numeric(12,2) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 &   DROP TABLE public.productos_vendidos;
       public         heap    postgres    false            �            1259    50103    productos_vendidos_id_seq    SEQUENCE     �   CREATE SEQUENCE public.productos_vendidos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.productos_vendidos_id_seq;
       public          postgres    false    250                       0    0    productos_vendidos_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.productos_vendidos_id_seq OWNED BY public.productos_vendidos.id;
          public          postgres    false    249            �            1259    49919    products    TABLE     �  CREATE TABLE public.products (
    id bigint NOT NULL,
    code character varying(255),
    name character varying(255) NOT NULL,
    description character varying(255),
    stock integer DEFAULT 0 NOT NULL,
    image character varying(255) NOT NULL,
    precio double precision NOT NULL,
    purchase_price double precision NOT NULL,
    unit character varying(255) NOT NULL,
    status character varying(255) DEFAULT 'ACTIVE'::character varying NOT NULL,
    category_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT products_status_check CHECK (((status)::text = ANY ((ARRAY['ACTIVE'::character varying, 'DESACTIVED'::character varying])::text[])))
);
    DROP TABLE public.products;
       public         heap    postgres    false            �            1259    49918    products_id_seq    SEQUENCE     x   CREATE SEQUENCE public.products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.products_id_seq;
       public          postgres    false    228                       0    0    products_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;
          public          postgres    false    227            �            1259    49908 	   providers    TABLE     e  CREATE TABLE public.providers (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    rif character varying(255) NOT NULL,
    address character varying(255),
    phone character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.providers;
       public         heap    postgres    false            �            1259    49907    providers_id_seq    SEQUENCE     y   CREATE SEQUENCE public.providers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.providers_id_seq;
       public          postgres    false    226                       0    0    providers_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.providers_id_seq OWNED BY public.providers.id;
          public          postgres    false    225            �            1259    49978    purchase_details    TABLE     Z  CREATE TABLE public.purchase_details (
    id bigint NOT NULL,
    quantity integer NOT NULL,
    price numeric(8,2) NOT NULL,
    invoice_code character varying(255) NOT NULL,
    observation text NOT NULL,
    status character varying(255) DEFAULT 'VALID'::character varying NOT NULL,
    purchase_id bigint NOT NULL,
    product_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT purchase_details_status_check CHECK (((status)::text = ANY ((ARRAY['VALID'::character varying, 'CANCELED'::character varying])::text[])))
);
 $   DROP TABLE public.purchase_details;
       public         heap    postgres    false            �            1259    49977    purchase_details_id_seq    SEQUENCE     �   CREATE SEQUENCE public.purchase_details_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.purchase_details_id_seq;
       public          postgres    false    234                        0    0    purchase_details_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.purchase_details_id_seq OWNED BY public.purchase_details.id;
          public          postgres    false    233            �            1259    49957 	   purchases    TABLE     y  CREATE TABLE public.purchases (
    id bigint NOT NULL,
    purchase_date timestamp(0) without time zone NOT NULL,
    tax numeric(8,2) NOT NULL,
    total numeric(8,2) NOT NULL,
    picture character varying(255),
    price numeric(12,2) NOT NULL,
    status character varying(255) DEFAULT 'VALID'::character varying NOT NULL,
    user_id bigint NOT NULL,
    provider_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT purchases_status_check CHECK (((status)::text = ANY ((ARRAY['VALID'::character varying, 'CANCELED'::character varying])::text[])))
);
    DROP TABLE public.purchases;
       public         heap    postgres    false            �            1259    49956    purchases_id_seq    SEQUENCE     y   CREATE SEQUENCE public.purchases_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.purchases_id_seq;
       public          postgres    false    232            !           0    0    purchases_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.purchases_id_seq OWNED BY public.purchases.id;
          public          postgres    false    231            �            1259    50013    sale_details    TABLE       CREATE TABLE public.sale_details (
    id bigint NOT NULL,
    quantity integer NOT NULL,
    price numeric(8,2) NOT NULL,
    discount numeric(8,2),
    status character varying(255) DEFAULT 'VALID'::character varying NOT NULL,
    sale_id bigint NOT NULL,
    product_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT sale_details_status_check CHECK (((status)::text = ANY ((ARRAY['VALID'::character varying, 'CANCELED'::character varying])::text[])))
);
     DROP TABLE public.sale_details;
       public         heap    postgres    false            �            1259    50012    sale_details_id_seq    SEQUENCE     |   CREATE SEQUENCE public.sale_details_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.sale_details_id_seq;
       public          postgres    false    238            "           0    0    sale_details_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.sale_details_id_seq OWNED BY public.sale_details.id;
          public          postgres    false    237            �            1259    49999    sales    TABLE       CREATE TABLE public.sales (
    id bigint NOT NULL,
    sale_date timestamp(0) without time zone NOT NULL,
    tax numeric(8,2) NOT NULL,
    total numeric(8,2) NOT NULL,
    status character varying(255) DEFAULT 'VALID'::character varying NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT sales_status_check CHECK (((status)::text = ANY ((ARRAY['VALID'::character varying, 'CANCELED'::character varying])::text[])))
);
    DROP TABLE public.sales;
       public         heap    postgres    false            �            1259    49998    sales_id_seq    SEQUENCE     u   CREATE SEQUENCE public.sales_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.sales_id_seq;
       public          postgres    false    236            #           0    0    sales_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.sales_id_seq OWNED BY public.sales.id;
          public          postgres    false    235            �            1259    50058    shopping_cart_details    TABLE     D  CREATE TABLE public.shopping_cart_details (
    id bigint NOT NULL,
    price numeric(8,2) NOT NULL,
    quantity numeric(8,2) DEFAULT '1'::numeric NOT NULL,
    shopping_cart_id bigint NOT NULL,
    product_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 )   DROP TABLE public.shopping_cart_details;
       public         heap    postgres    false            �            1259    50057    shopping_cart_details_id_seq    SEQUENCE     �   CREATE SEQUENCE public.shopping_cart_details_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.shopping_cart_details_id_seq;
       public          postgres    false    244            $           0    0    shopping_cart_details_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.shopping_cart_details_id_seq OWNED BY public.shopping_cart_details.id;
          public          postgres    false    243            �            1259    50044    shopping_carts    TABLE       CREATE TABLE public.shopping_carts (
    id bigint NOT NULL,
    status character varying(255) DEFAULT 'ACTIVE'::character varying NOT NULL,
    user_id bigint,
    order_date timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    CONSTRAINT shopping_carts_status_check CHECK (((status)::text = ANY ((ARRAY['ACTIVE'::character varying, 'PENDING'::character varying, 'APPROVED'::character varying, 'FIMISHED'::character varying])::text[])))
);
 "   DROP TABLE public.shopping_carts;
       public         heap    postgres    false            �            1259    50043    shopping_carts_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.shopping_carts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.shopping_carts_id_seq;
       public          postgres    false    242            %           0    0    shopping_carts_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.shopping_carts_id_seq OWNED BY public.shopping_carts.id;
          public          postgres    false    241            �            1259    16576    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    16575    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    217            &           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    216            �            1259    50097    ventas    TABLE     �   CREATE TABLE public.ventas (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_cliente bigint NOT NULL
);
    DROP TABLE public.ventas;
       public         heap    postgres    false            �            1259    50096    ventas_id_seq    SEQUENCE     v   CREATE SEQUENCE public.ventas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.ventas_id_seq;
       public          postgres    false    248            '           0    0    ventas_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.ventas_id_seq OWNED BY public.ventas.id;
          public          postgres    false    247            �            1259    50032    visitas    TABLE       CREATE TABLE public.visitas (
    id bigint NOT NULL,
    visita_date timestamp(0) without time zone NOT NULL,
    motivo character varying(255),
    client_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.visitas;
       public         heap    postgres    false            �            1259    50031    visitas_id_seq    SEQUENCE     w   CREATE SEQUENCE public.visitas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.visitas_id_seq;
       public          postgres    false    240            (           0    0    visitas_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.visitas_id_seq OWNED BY public.visitas.id;
          public          postgres    false    239            �           2604    49900    categories id    DEFAULT     n   ALTER TABLE ONLY public.categories ALTER COLUMN id SET DEFAULT nextval('public.categories_id_seq'::regclass);
 <   ALTER TABLE public.categories ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    224    224            �           2604    50121    clientes id    DEFAULT     j   ALTER TABLE ONLY public.clientes ALTER COLUMN id SET DEFAULT nextval('public.clientes_id_seq'::regclass);
 :   ALTER TABLE public.clientes ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    251    252    252            �           2604    49943 
   clients id    DEFAULT     h   ALTER TABLE ONLY public.clients ALTER COLUMN id SET DEFAULT nextval('public.clients_id_seq'::regclass);
 9   ALTER TABLE public.clients ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    229    230    230            �           2604    50143 
   compras id    DEFAULT     h   ALTER TABLE ONLY public.compras ALTER COLUMN id SET DEFAULT nextval('public.compras_id_seq'::regclass);
 9   ALTER TABLE public.compras ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    253    254    254            �           2604    16596    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219    220            �           2604    16572    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214    215            �           2604    49888    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    222    222            �           2604    50150    producto_comprados id    DEFAULT     ~   ALTER TABLE ONLY public.producto_comprados ALTER COLUMN id SET DEFAULT nextval('public.producto_comprados_id_seq'::regclass);
 D   ALTER TABLE public.producto_comprados ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    255    256    256            �           2604    50079    productos id    DEFAULT     l   ALTER TABLE ONLY public.productos ALTER COLUMN id SET DEFAULT nextval('public.productos_id_seq'::regclass);
 ;   ALTER TABLE public.productos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    246    245    246            �           2604    50107    productos_vendidos id    DEFAULT     ~   ALTER TABLE ONLY public.productos_vendidos ALTER COLUMN id SET DEFAULT nextval('public.productos_vendidos_id_seq'::regclass);
 D   ALTER TABLE public.productos_vendidos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    249    250    250            �           2604    49922    products id    DEFAULT     j   ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);
 :   ALTER TABLE public.products ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    227    228            �           2604    49911    providers id    DEFAULT     l   ALTER TABLE ONLY public.providers ALTER COLUMN id SET DEFAULT nextval('public.providers_id_seq'::regclass);
 ;   ALTER TABLE public.providers ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    226    226            �           2604    49981    purchase_details id    DEFAULT     z   ALTER TABLE ONLY public.purchase_details ALTER COLUMN id SET DEFAULT nextval('public.purchase_details_id_seq'::regclass);
 B   ALTER TABLE public.purchase_details ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    234    233    234            �           2604    49960    purchases id    DEFAULT     l   ALTER TABLE ONLY public.purchases ALTER COLUMN id SET DEFAULT nextval('public.purchases_id_seq'::regclass);
 ;   ALTER TABLE public.purchases ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    232    231    232            �           2604    50016    sale_details id    DEFAULT     r   ALTER TABLE ONLY public.sale_details ALTER COLUMN id SET DEFAULT nextval('public.sale_details_id_seq'::regclass);
 >   ALTER TABLE public.sale_details ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    238    238            �           2604    50002    sales id    DEFAULT     d   ALTER TABLE ONLY public.sales ALTER COLUMN id SET DEFAULT nextval('public.sales_id_seq'::regclass);
 7   ALTER TABLE public.sales ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    236    235    236            �           2604    50061    shopping_cart_details id    DEFAULT     �   ALTER TABLE ONLY public.shopping_cart_details ALTER COLUMN id SET DEFAULT nextval('public.shopping_cart_details_id_seq'::regclass);
 G   ALTER TABLE public.shopping_cart_details ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    244    243    244            �           2604    50047    shopping_carts id    DEFAULT     v   ALTER TABLE ONLY public.shopping_carts ALTER COLUMN id SET DEFAULT nextval('public.shopping_carts_id_seq'::regclass);
 @   ALTER TABLE public.shopping_carts ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    241    242    242            �           2604    16579    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    217    217            �           2604    50100 	   ventas id    DEFAULT     f   ALTER TABLE ONLY public.ventas ALTER COLUMN id SET DEFAULT nextval('public.ventas_id_seq'::regclass);
 8   ALTER TABLE public.ventas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    247    248    248            �           2604    50035 
   visitas id    DEFAULT     h   ALTER TABLE ONLY public.visitas ALTER COLUMN id SET DEFAULT nextval('public.visitas_id_seq'::regclass);
 9   ALTER TABLE public.visitas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    240    239    240            �          0    49897 
   categories 
   TABLE DATA           S   COPY public.categories (id, name, description, created_at, updated_at) FROM stdin;
    public          postgres    false    224   �       	          0    50118    clientes 
   TABLE DATA           h   COPY public.clientes (id, name, cedula, rif, address, phone, email, created_at, updated_at) FROM stdin;
    public          postgres    false    252   ��       �          0    49940    clients 
   TABLE DATA           g   COPY public.clients (id, name, cedula, rif, address, phone, email, created_at, updated_at) FROM stdin;
    public          postgres    false    230   ��                 0    50140    compras 
   TABLE DATA           J   COPY public.compras (id, created_at, updated_at, id_provider) FROM stdin;
    public          postgres    false    254   ��       �          0    16593    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    220   m�       �          0    16569 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    215   ��       �          0    16586    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    218   9�       �          0    49885    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, created_at, updated_at) FROM stdin;
    public          postgres    false    222   V�                 0    50147    producto_comprados 
   TABLE DATA           �   COPY public.producto_comprados (id, id_compra, description, code, precio, cantidad, status, created_at, updated_at) FROM stdin;
    public          postgres    false    256   s�                 0    50076 	   productos 
   TABLE DATA           �   COPY public.productos (id, category_id, code, name, description, precio_compra, precio_venta, stock, image, unit, status, created_at, updated_at) FROM stdin;
    public          postgres    false    246   ��                 0    50104    productos_vendidos 
   TABLE DATA           w   COPY public.productos_vendidos (id, id_venta, description, code, precio, cantidad, created_at, updated_at) FROM stdin;
    public          postgres    false    250   ��       �          0    49919    products 
   TABLE DATA           �   COPY public.products (id, code, name, description, stock, image, precio, purchase_price, unit, status, category_id, created_at, updated_at) FROM stdin;
    public          postgres    false    228   ��       �          0    49908 	   providers 
   TABLE DATA           a   COPY public.providers (id, name, email, rif, address, phone, created_at, updated_at) FROM stdin;
    public          postgres    false    226   �       �          0    49978    purchase_details 
   TABLE DATA           �   COPY public.purchase_details (id, quantity, price, invoice_code, observation, status, purchase_id, product_id, created_at, updated_at) FROM stdin;
    public          postgres    false    234   ��       �          0    49957 	   purchases 
   TABLE DATA           �   COPY public.purchases (id, purchase_date, tax, total, picture, price, status, user_id, provider_id, created_at, updated_at) FROM stdin;
    public          postgres    false    232   ��       �          0    50013    sale_details 
   TABLE DATA           z   COPY public.sale_details (id, quantity, price, discount, status, sale_id, product_id, created_at, updated_at) FROM stdin;
    public          postgres    false    238   ��       �          0    49999    sales 
   TABLE DATA           c   COPY public.sales (id, sale_date, tax, total, status, user_id, created_at, updated_at) FROM stdin;
    public          postgres    false    236   ��                 0    50058    shopping_cart_details 
   TABLE DATA           z   COPY public.shopping_cart_details (id, price, quantity, shopping_cart_id, product_id, created_at, updated_at) FROM stdin;
    public          postgres    false    244   �       �          0    50044    shopping_carts 
   TABLE DATA           a   COPY public.shopping_carts (id, status, user_id, order_date, created_at, updated_at) FROM stdin;
    public          postgres    false    242   #�       �          0    16576    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    217   @�                 0    50097    ventas 
   TABLE DATA           H   COPY public.ventas (id, created_at, updated_at, id_cliente) FROM stdin;
    public          postgres    false    248   ]�       �          0    50032    visitas 
   TABLE DATA           ]   COPY public.visitas (id, visita_date, motivo, client_id, created_at, updated_at) FROM stdin;
    public          postgres    false    240   ��       )           0    0    categories_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.categories_id_seq', 4, true);
          public          postgres    false    223            *           0    0    clientes_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.clientes_id_seq', 3, true);
          public          postgres    false    251            +           0    0    clients_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.clients_id_seq', 1, false);
          public          postgres    false    229            ,           0    0    compras_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.compras_id_seq', 9, true);
          public          postgres    false    253            -           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    219            .           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 26, true);
          public          postgres    false    214            /           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    221            0           0    0    producto_comprados_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.producto_comprados_id_seq', 1, false);
          public          postgres    false    255            1           0    0    productos_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.productos_id_seq', 14, true);
          public          postgres    false    245            2           0    0    productos_vendidos_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.productos_vendidos_id_seq', 2, true);
          public          postgres    false    249            3           0    0    products_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.products_id_seq', 1, false);
          public          postgres    false    227            4           0    0    providers_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.providers_id_seq', 1, true);
          public          postgres    false    225            5           0    0    purchase_details_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.purchase_details_id_seq', 1, false);
          public          postgres    false    233            6           0    0    purchases_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.purchases_id_seq', 1, false);
          public          postgres    false    231            7           0    0    sale_details_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.sale_details_id_seq', 1, false);
          public          postgres    false    237            8           0    0    sales_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.sales_id_seq', 1, false);
          public          postgres    false    235            9           0    0    shopping_cart_details_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.shopping_cart_details_id_seq', 1, false);
          public          postgres    false    243            :           0    0    shopping_carts_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.shopping_carts_id_seq', 1, false);
          public          postgres    false    241            ;           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    216            <           0    0    ventas_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.ventas_id_seq', 2, true);
          public          postgres    false    247            =           0    0    visitas_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.visitas_id_seq', 2, true);
          public          postgres    false    239                       2606    49906 !   categories categories_name_unique 
   CONSTRAINT     \   ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_name_unique UNIQUE (name);
 K   ALTER TABLE ONLY public.categories DROP CONSTRAINT categories_name_unique;
       public            postgres    false    224            	           2606    49904    categories categories_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.categories DROP CONSTRAINT categories_pkey;
       public            postgres    false    224            7           2606    50127    clientes clientes_cedula_unique 
   CONSTRAINT     \   ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_cedula_unique UNIQUE (cedula);
 I   ALTER TABLE ONLY public.clientes DROP CONSTRAINT clientes_cedula_unique;
       public            postgres    false    252            9           2606    50133    clientes clientes_email_unique 
   CONSTRAINT     Z   ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_email_unique UNIQUE (email);
 H   ALTER TABLE ONLY public.clientes DROP CONSTRAINT clientes_email_unique;
       public            postgres    false    252            ;           2606    50131    clientes clientes_phone_unique 
   CONSTRAINT     Z   ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_phone_unique UNIQUE (phone);
 H   ALTER TABLE ONLY public.clientes DROP CONSTRAINT clientes_phone_unique;
       public            postgres    false    252            =           2606    50125    clientes clientes_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.clientes DROP CONSTRAINT clientes_pkey;
       public            postgres    false    252            ?           2606    50129    clientes clientes_rif_unique 
   CONSTRAINT     V   ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_rif_unique UNIQUE (rif);
 F   ALTER TABLE ONLY public.clientes DROP CONSTRAINT clientes_rif_unique;
       public            postgres    false    252                       2606    49949    clients clients_cedula_unique 
   CONSTRAINT     Z   ALTER TABLE ONLY public.clients
    ADD CONSTRAINT clients_cedula_unique UNIQUE (cedula);
 G   ALTER TABLE ONLY public.clients DROP CONSTRAINT clients_cedula_unique;
       public            postgres    false    230                       2606    49955    clients clients_email_unique 
   CONSTRAINT     X   ALTER TABLE ONLY public.clients
    ADD CONSTRAINT clients_email_unique UNIQUE (email);
 F   ALTER TABLE ONLY public.clients DROP CONSTRAINT clients_email_unique;
       public            postgres    false    230                       2606    49953    clients clients_phone_unique 
   CONSTRAINT     X   ALTER TABLE ONLY public.clients
    ADD CONSTRAINT clients_phone_unique UNIQUE (phone);
 F   ALTER TABLE ONLY public.clients DROP CONSTRAINT clients_phone_unique;
       public            postgres    false    230                       2606    49947    clients clients_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.clients
    ADD CONSTRAINT clients_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.clients DROP CONSTRAINT clients_pkey;
       public            postgres    false    230                       2606    49951    clients clients_rif_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.clients
    ADD CONSTRAINT clients_rif_unique UNIQUE (rif);
 D   ALTER TABLE ONLY public.clients DROP CONSTRAINT clients_rif_unique;
       public            postgres    false    230            A           2606    50145    compras compras_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.compras
    ADD CONSTRAINT compras_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.compras DROP CONSTRAINT compras_pkey;
       public            postgres    false    254            �           2606    16601    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    220                        2606    16603 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    220            �           2606    16574    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    215                       2606    49892 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    222                       2606    49895 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    222            C           2606    50156 *   producto_comprados producto_comprados_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.producto_comprados
    ADD CONSTRAINT producto_comprados_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.producto_comprados DROP CONSTRAINT producto_comprados_pkey;
       public            postgres    false    256            -           2606    50093    productos productos_code_unique 
   CONSTRAINT     Z   ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_code_unique UNIQUE (code);
 I   ALTER TABLE ONLY public.productos DROP CONSTRAINT productos_code_unique;
       public            postgres    false    246            /           2606    50095    productos productos_name_unique 
   CONSTRAINT     Z   ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_name_unique UNIQUE (name);
 I   ALTER TABLE ONLY public.productos DROP CONSTRAINT productos_name_unique;
       public            postgres    false    246            1           2606    50086    productos productos_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.productos DROP CONSTRAINT productos_pkey;
       public            postgres    false    246            5           2606    50111 *   productos_vendidos productos_vendidos_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.productos_vendidos
    ADD CONSTRAINT productos_vendidos_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.productos_vendidos DROP CONSTRAINT productos_vendidos_pkey;
       public            postgres    false    250                       2606    49936    products products_code_unique 
   CONSTRAINT     X   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_code_unique UNIQUE (code);
 G   ALTER TABLE ONLY public.products DROP CONSTRAINT products_code_unique;
       public            postgres    false    228                       2606    49938    products products_name_unique 
   CONSTRAINT     X   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_name_unique UNIQUE (name);
 G   ALTER TABLE ONLY public.products DROP CONSTRAINT products_name_unique;
       public            postgres    false    228                       2606    49929    products products_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.products DROP CONSTRAINT products_pkey;
       public            postgres    false    228                       2606    49917    providers providers_name_unique 
   CONSTRAINT     Z   ALTER TABLE ONLY public.providers
    ADD CONSTRAINT providers_name_unique UNIQUE (name);
 I   ALTER TABLE ONLY public.providers DROP CONSTRAINT providers_name_unique;
       public            postgres    false    226                       2606    49915    providers providers_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.providers
    ADD CONSTRAINT providers_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.providers DROP CONSTRAINT providers_pkey;
       public            postgres    false    226            !           2606    49987 &   purchase_details purchase_details_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.purchase_details
    ADD CONSTRAINT purchase_details_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.purchase_details DROP CONSTRAINT purchase_details_pkey;
       public            postgres    false    234                       2606    49966    purchases purchases_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.purchases
    ADD CONSTRAINT purchases_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.purchases DROP CONSTRAINT purchases_pkey;
       public            postgres    false    232            %           2606    50020    sale_details sale_details_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.sale_details
    ADD CONSTRAINT sale_details_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.sale_details DROP CONSTRAINT sale_details_pkey;
       public            postgres    false    238            #           2606    50006    sales sales_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.sales
    ADD CONSTRAINT sales_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.sales DROP CONSTRAINT sales_pkey;
       public            postgres    false    236            +           2606    50064 0   shopping_cart_details shopping_cart_details_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.shopping_cart_details
    ADD CONSTRAINT shopping_cart_details_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.shopping_cart_details DROP CONSTRAINT shopping_cart_details_pkey;
       public            postgres    false    244            )           2606    50051 "   shopping_carts shopping_carts_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.shopping_carts
    ADD CONSTRAINT shopping_carts_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.shopping_carts DROP CONSTRAINT shopping_carts_pkey;
       public            postgres    false    242            �           2606    16585    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    217            �           2606    16583    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    217            3           2606    50102    ventas ventas_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.ventas
    ADD CONSTRAINT ventas_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.ventas DROP CONSTRAINT ventas_pkey;
       public            postgres    false    248            '           2606    50037    visitas visitas_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.visitas
    ADD CONSTRAINT visitas_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.visitas DROP CONSTRAINT visitas_pkey;
       public            postgres    false    240            �           1259    16591    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    218                       1259    49893 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    222    222            S           2606    50162 $   compras compras_id_providers_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.compras
    ADD CONSTRAINT compras_id_providers_foreign FOREIGN KEY (id_provider) REFERENCES public.providers(id) ON UPDATE CASCADE ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.compras DROP CONSTRAINT compras_id_providers_foreign;
       public          postgres    false    254    3341    226            T           2606    50157 7   producto_comprados producto_comprados_id_compra_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.producto_comprados
    ADD CONSTRAINT producto_comprados_id_compra_foreign FOREIGN KEY (id_compra) REFERENCES public.compras(id) ON UPDATE CASCADE ON DELETE CASCADE;
 a   ALTER TABLE ONLY public.producto_comprados DROP CONSTRAINT producto_comprados_id_compra_foreign;
       public          postgres    false    256    254    3393            P           2606    50087 '   productos productos_category_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.productos
    ADD CONSTRAINT productos_category_id_foreign FOREIGN KEY (category_id) REFERENCES public.categories(id);
 Q   ALTER TABLE ONLY public.productos DROP CONSTRAINT productos_category_id_foreign;
       public          postgres    false    224    3337    246            R           2606    50112 6   productos_vendidos productos_vendidos_id_venta_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.productos_vendidos
    ADD CONSTRAINT productos_vendidos_id_venta_foreign FOREIGN KEY (id_venta) REFERENCES public.ventas(id) ON UPDATE CASCADE ON DELETE CASCADE;
 `   ALTER TABLE ONLY public.productos_vendidos DROP CONSTRAINT productos_vendidos_id_venta_foreign;
       public          postgres    false    3379    248    250            D           2606    49930 %   products products_category_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_category_id_foreign FOREIGN KEY (category_id) REFERENCES public.categories(id);
 O   ALTER TABLE ONLY public.products DROP CONSTRAINT products_category_id_foreign;
       public          postgres    false    3337    224    228            G           2606    49993 4   purchase_details purchase_details_product_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.purchase_details
    ADD CONSTRAINT purchase_details_product_id_foreign FOREIGN KEY (product_id) REFERENCES public.products(id);
 ^   ALTER TABLE ONLY public.purchase_details DROP CONSTRAINT purchase_details_product_id_foreign;
       public          postgres    false    228    234    3347            H           2606    49988 5   purchase_details purchase_details_purchase_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.purchase_details
    ADD CONSTRAINT purchase_details_purchase_id_foreign FOREIGN KEY (purchase_id) REFERENCES public.purchases(id);
 _   ALTER TABLE ONLY public.purchase_details DROP CONSTRAINT purchase_details_purchase_id_foreign;
       public          postgres    false    234    232    3359            E           2606    49972 '   purchases purchases_provider_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.purchases
    ADD CONSTRAINT purchases_provider_id_foreign FOREIGN KEY (provider_id) REFERENCES public.providers(id);
 Q   ALTER TABLE ONLY public.purchases DROP CONSTRAINT purchases_provider_id_foreign;
       public          postgres    false    226    232    3341            F           2606    49967 #   purchases purchases_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.purchases
    ADD CONSTRAINT purchases_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 M   ALTER TABLE ONLY public.purchases DROP CONSTRAINT purchases_user_id_foreign;
       public          postgres    false    232    217    3323            J           2606    50026 ,   sale_details sale_details_product_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.sale_details
    ADD CONSTRAINT sale_details_product_id_foreign FOREIGN KEY (product_id) REFERENCES public.products(id);
 V   ALTER TABLE ONLY public.sale_details DROP CONSTRAINT sale_details_product_id_foreign;
       public          postgres    false    3347    238    228            K           2606    50021 )   sale_details sale_details_sale_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.sale_details
    ADD CONSTRAINT sale_details_sale_id_foreign FOREIGN KEY (sale_id) REFERENCES public.sales(id);
 S   ALTER TABLE ONLY public.sale_details DROP CONSTRAINT sale_details_sale_id_foreign;
       public          postgres    false    236    238    3363            I           2606    50007    sales sales_user_id_foreign    FK CONSTRAINT     z   ALTER TABLE ONLY public.sales
    ADD CONSTRAINT sales_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 E   ALTER TABLE ONLY public.sales DROP CONSTRAINT sales_user_id_foreign;
       public          postgres    false    217    236    3323            N           2606    50070 >   shopping_cart_details shopping_cart_details_product_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.shopping_cart_details
    ADD CONSTRAINT shopping_cart_details_product_id_foreign FOREIGN KEY (product_id) REFERENCES public.products(id);
 h   ALTER TABLE ONLY public.shopping_cart_details DROP CONSTRAINT shopping_cart_details_product_id_foreign;
       public          postgres    false    244    3347    228            O           2606    50065 D   shopping_cart_details shopping_cart_details_shopping_cart_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.shopping_cart_details
    ADD CONSTRAINT shopping_cart_details_shopping_cart_id_foreign FOREIGN KEY (shopping_cart_id) REFERENCES public.shopping_carts(id);
 n   ALTER TABLE ONLY public.shopping_cart_details DROP CONSTRAINT shopping_cart_details_shopping_cart_id_foreign;
       public          postgres    false    3369    242    244            M           2606    50052 -   shopping_carts shopping_carts_user_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.shopping_carts
    ADD CONSTRAINT shopping_carts_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id);
 W   ALTER TABLE ONLY public.shopping_carts DROP CONSTRAINT shopping_carts_user_id_foreign;
       public          postgres    false    242    217    3323            Q           2606    50134     ventas ventas_id_cliente_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ventas
    ADD CONSTRAINT ventas_id_cliente_foreign FOREIGN KEY (id_cliente) REFERENCES public.clientes(id) ON UPDATE CASCADE ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.ventas DROP CONSTRAINT ventas_id_cliente_foreign;
       public          postgres    false    252    3389    248            L           2606    50038 !   visitas visitas_client_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.visitas
    ADD CONSTRAINT visitas_client_id_foreign FOREIGN KEY (client_id) REFERENCES public.clients(id);
 K   ALTER TABLE ONLY public.visitas DROP CONSTRAINT visitas_client_id_foreign;
       public          postgres    false    230    3355    240            �   �   x�m��j�0���S��;�����e��vqmQn�4�=����r��	>~��s���T������[�F<�H%dp�������ໃ�ڿ̵��u��+G)T8�ǵ̜�N�B�a�����UQ�4ͣ���ꕙ^�̚�E�5��U��'V�C%��J�1�Ms�o1��%���BUf�ORf�ֵTx�"�>��`��-f�c�icc�      	   �   x�u��j�@Eך��h��1~�b誥(�vb&�=&�~�M]�ZtA!̺�D��	*bq����/:��u���6��%܃�$y\��8R�w���w��!Y,k.jɷ2C��M��1;@�s��Gb�R�:xY�І9D{��6���p^�� ti�K�tW�}?j�6�a�j�ڕ[�axk�O�Nέ��'���U�W3}��$��y+3��1��tV�      �      x������ � �         i   x�m���0�w9EHaRV�j��?G�����
�CM���QO��Hk�VװF��az�����ֈ�=�-��F��Jk��>ｌ�7�&�g�{w��S��� � $HT      �      x������ � �      �   �  x�m�ݒ�0����t,�'�.��8�ͺ�q�&��_�	�'�.��Αd�	(A�$�=4Gg7G��b��^Vw�k�nS�q��ۊDf�Db��n$֯n�_�Rp�8J�p$���>6���_������_bH'��&�RO8�q�fW���[���;���*{&dS!s��r��5D�
=64�I���R�%����z/�y+,��b�Ϟc��V�PX�݂s~��Ӧ*2`G�w���6*�lD��л(ٵ.�:�
���ҺF�|�� �3/�!C aTǬ�|�j�Vk,=��p��ە��!��D��J��e�	B�{�F��|j�6x�U=�L_8k��بxPjjON�-�5������^���H~��dY���/���f������c'���?EM���δ_�ݏ%?��dp�      �      x������ � �      �      x������ � �            x������ � �         �  x���ok�0�_K�Bo+��:���,��u������%*���N���w��ns�%$9̅�~y�0ŀ=ᣭ>�K�B��脳5�b�叽�N����(li�xL���2�d��(�>߬���b�ToXb�pg�X��|�b���K	�\fyO�b���#ӕ�my�l�.gw���nͮ6��8[,�fbQ��ng߈��aa�Ѣ#�8�=er%�\ʩ�1��3�.��*W�M�Lf�NrL�@���M�n��c����X�.�#&Y�>u�L����骵�@����ہ�#�4襐�*����r��D�ǄS��}f��+7bMq�c���f�K��!RHz8�*��O"!����ڙ�{MLa�7�w��T:"�Ȣz��Q��G��O�!)[:�C�&,�Җl��>�Ӎ��0�"��m
�1U���lV�GG�����2Ҧ֥�6�+S�x5�\CH�"��20�*=E�S����>�[I�T�K*�(|���#>�� ���G�ѱ�zh��F=�4�j*�i����-pMK�߿?X#s�dXqr �p�$������� ��A�-	x��P�5��
����4P�K�帗�QXjw���m���^�G�겤d��DE�����.��a3�+�+��j<�]�K�����X-��kh��;�t�5�1�#���s�nVO+"S:k��!�I�"~�SX��f�5툂��QR��kc�z7P�M�B�)��5 JӺ��(�~�S9�m�9�f��Y         X   x�3�4�,H��F�z�F`���X��B��H�����������g@bQ�BFbrj�BbQjAb1�(ct���ͭL���q��qqq �o      �      x������ � �      �   j   x�3���q�q�s�L�-(J-N,.��I,JNtH�M���K���442635��074�s�q�s�t�40142112212�4202�5��54R0��2��24�&����� ,�      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �            x������ � �      �      x������ � �      �      x������ � �         3   x�3�4202�5��54R02�26�21�*f�e�"ndehne�]̐+F��� 1�      �      x������ � �     