FROM php:8.2-fpm-alpine

RUN apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS \
        curl-dev \
    && apk add --no-cache \
        curl \
        nginx \
        shadow \
        supervisor \
    && apk del -f .build-deps \
    && rm -rf /tmp/pear


COPY /config/nginx.conf /etc/nginx/nginx.conf
COPY /config/fpm-pool.conf /usr/local/etc/php-fpm.d/www.conf
COPY /config/supervisord.conf /etc/supervisord/conf.d/supervisord.conf
COPY /config/entrypoint.sh /entrypoint.sh

ARG PUID=1000
ENV PUID ${PUID}
ARG PGID=1000
ENV PGID ${PGID}

RUN groupmod -o -g ${PGID} nobody && \
    usermod -o -u ${PUID} -g nobody nobody && \
    apk del shadow

RUN chown -R nobody.nobody /run && \
    chown -R nobody.nobody /etc/nginx && \
    chown -R nobody.nobody /var/lib/nginx && \
    chown -R nobody.nobody /var/log/nginx && \
    chmod +x /entrypoint.sh && \
    rm -rf /etc/nginx/conf.d/default.conf

RUN mkdir /.config && \
    chown -R nobody.nobody /.config

RUN curl -s https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin/ --filename=composer \
    && mkdir /.composer \
    && chown -R nobody:nobody /.composer

USER nobody

WORKDIR /var/www/html

EXPOSE 8080

CMD ["/entrypoint.sh"]

HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8080/fpm-ping
