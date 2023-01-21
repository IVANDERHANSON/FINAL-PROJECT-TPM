<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{url('/')}}">
                        {{-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> --}}
                        <svg width="80" height="59" viewBox="0 0 80 59" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="80" height="59" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_161_201" transform="translate(-0.0062996) scale(0.00585317 0.00793651)"/>
                                </pattern>
                                <image id="image0_161_201" width="173" height="126" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK0AAAB+CAYAAABWBZHCAAAb+0lEQVR4Xu2dCXSUVZbHSVJZKgkhBBK2oATDJhFwENAGV3DBpXHphnYbl9ZptF3abm2dXvRon25PH5dRZEZnEOxpXLEd3HFDAcUFFGUVTEICCQlbQtbKQpb5XbqKU1Sq6tteVSrwvnO+U5XUe/fdd9//u9997917X69e+tIS0BLQEtAS0BLQEtAS0BLQEtAS0BLQEjh2JdDS0pLKnaJaAgcPHoyDblJra6tLNW2hB20XtON7IO2ESPAcaZpxkW7ALP26uro8wJUbFxfX7nK5yjIyMsrM1jUqV1tbO7y9vX0A5TqSkpJ2pKen7zaqY+Z3gJrY1NR0HLT7Ub49JSWlODU1tcZMXaMyPAhCe1BHR0fv+Pj4Jmjv4W40qmfmd+imNDc3D+rs7ExJSEhohO7u5OTkVjN1Y6FMRDSPnY4x8Jnc2d66bXwqAW1bW1sCoB0qtHkgWnkw2qGtBLQAyg39YdDuC+0WvtdBWwlooZkCvYFe0DbzdwO0lYAWWr25c6Cdxt3Ig3wA2j0GtBF5pdkBLdqkloFv4m7muwyQsks0FXTbuDtEs6giDN1W7hahy93J94OqaAtNoS9vHi/v8rApuaDb5qONPEQ2yvhWwqABkZjRtLyeKgVcwi/mQa2qzkOrnddhIVqrGpqdaJUKVbSh1ezxeLbSRpVocf7epYo2NJuQSTmasEoAlpiYqESDe+VbB6+VmAf7AW0D5kGzKr41HS0BLQEtAS0BLQEtAS0BLQEtAS0BLQEtAS0BLQEtAS0BLQEtAS0BLQEtAS0BLYGYk0DMOMzEnGR6GEM4HA2qr68fsn///tE422TKd3FCohuyVe8b506+dw4ZMuRzPjvYcTvQv3//Lf369StkV6y+p3RZg7anjFQAn7t27TqFexr32QB1Ah5nfSiSyp1osUvi0yC+Hs15eXlvA+iVgwcP/jI7O7vQIp2oFdegjZqonTe0ffv2s0tKSmbyORuQDoFipHxHmvFN2D18+PAlAHkZnyucc6+OggatOllGhBKv+IFr1669G6BeCVAH+b3qI9JeEKLtvXv33gp4Xxo/fvwC/Jz3RqvhUO1o0Hb3CIRoX2xUwHrX1q1bf0GRjBhhs2r06NELJk2a9Djg3dddPGnQdpfkQ4M157PPPnsYM2A2RdJjjD0fOwcA77OA99Hu0LwatDGEijVr1tyxfv36+7xmQAxxFpwV8U3GZPjr5MmT50WTWQ3aaEo7RFv79u0bsWzZsldYpjo5BtixzAI273czZ878CSsOxZYr26gQU6DFSx8n/fgOG/3o1ipO+EazXoc58CQdkCWrnnzVT5s27XY07/9GuhMxA9rGxsb+vBb7EQISz2tnDxGzEh4T0xdBkhLVeiaf43nYKuH7U6JxS80wTb00tOvzFRUVl5op31PKHHfccW9MmTLlN4QL7c3KyorIhkWk1vksyVg0VU1NTTZxXP2pKA+S7OLEPGjheyAP2sVEtk4jRqwI4EqUryFoMQeGL1my5DXMgQmWBNUDCu/cuXMWmx2nTJ069aaqqqrP2W2TCGWlV0xE44pJIIGB9Ey2GSX6tKeEM8dLtCw8C7+NfPcYjQ6APeH111//5GgErK/vBHsOWbFixasHDhyYYiQPO7/HBGiFcYk25ZWyn3uf7MbY6Uy06/Cw7YXfT7hfhP83+Qw7Efn+++8vAbCfoZ2Pizav0W4Pkyn9448//seOHTvOUN12zNi0qjsWa/S8JsE6+OrpEy6rom2aNWvWmbm5uWutVgxVPmY0raoOxSIdAJuHhl1xDAJWhsPNhPMdZDBa1dho0KqSZAg6PsBiEgyNcFMxS56+Z/PQLhd7XgWTGrQqpBiCBstabuy6544FG9ZIjMhgMLJ4Xpb6jMoa/a5BayQhB7+vXr36zyz/nOmAxFFVFVmcCnCfcdopPRFzKsEQ9VkpuJwBei1C5FWR9bCO+j0RDDXctWzHlgGs8UQ+9GWNNZ9GHGvFYIyyhnvDhAkT/ma3Exq0diUXph5uhQNeeeWVDbwScyJA3p+kZDuUWyIWTF2y24iH1nNEKCyXCAXCbEJmqMQGHSmREXic/Yydu6k0YDUqIhRPzbNnzy6w66ugQWtqqK0VWrp06VsM8sXWalkq3QzgPmSffz7asZxJzjIDu7mTbfHNeGPdjzP3B3aSM4szOn4S92zYsOFOOHWcQZzYtM/nzJkjD4LlS4PWssjCV8AsuEIW1RWTPUwO8G05/fTTbycE5mPfP9GI+bLLBnBzg7Rbj9/r78aNG7cIsBru2BnxLc7py5cvf4GH8myjska/y1YvZsJCo3KBv2vQWpVYmPLMjNMXL168TWbKCsn6SLUAvL8AwMeCacpgwMUUKL700ksv4DVcpJqf7777bi4TzflOtC787UfbjrXqSK5Bq3A0ceK+ixCZxxWSPERKtrWnT59+Fdr1k3C0ZdcNjfs+D01/JlhfA9hLQ5kCJJpOY9I1Ff+A6TxswxoaGoYLbe/ZDmVo9O/69u27PBzgiVs7B637Fu2ZtqkD+cdc+fuFF154nRWZadBakVZ4LZuBli0WwCgi6QPsTrB3LuD5wQxdgDsM/9wHccqeCwAPZVb3vwSsTKxu27179w38fxh3chi6cjjJ+kGDBi0AXEFNHsyhy7zmkN3lU8+11157PNp2v5n+SRkNWrOSMiiHlv01WvYxReQOkUFbfgNgzwE4Stz70IxXlZaW/hHSVrdU6+Dh0xEjRvyGh2dbYB8xFW7GVPgfu30fNWrUkzNmzPiV2fp2nw6z9I+JcmLLMrP+rcrOek2Cq1UAFo+rpHXr1i0AsM/aAKx0K4M+XrRx48Y3y8rKzg/sJ5OpBaxmLLfb/23btt3MBM/08qAGrV1J+9XjdXs+ZoGcU6bkkiOS0LDTg2k1Ow18++23L+NkfxN13Xbq+9UZWVhY+N+sHJweSAeb+0r+Z9cPOpU31e/N8qZBa1ZSYcqRm+BmBWQOkyDW6hYAu0UFzS1btjzMJOsyFbS8NI6nv4uYwA3zpyl5EFjZ+IPddtC2N6Jt5RBBw0uD1lBE4Qsg6CEq1ix9rchsesyYMa84ZOtQdYBVwIRLNgNUX/lMwMTUOOJiSe4p/mH3eKd0bO4fm2FUg9aMlMKUQdCy85XkkMyh6pgFe88555w7VNASGmjZv/Hh1CQIyg427hmSqsn/RzmPjEnV3+3yz27br83UjRnQshQTT9xUb7kRSI9Z1SguLp5jRtBmysjOFQOv5OA/tP+PcXyZaKZdm2USy8vLuzxg+fn5L9ik14uxPxGak4zq24rGZS2QcChXclpaWhOxUZ1FdXU/2tXYOEnu6paWYTQqAYptQ9LSvrhg6NAHU10uw1cGAu7HLFdsmniiWyVPVLflijISmu93OTX92WefNRSyGXpo2XI7W5qhaLNx8BMz7TopQ/T0eB6Oc1g5OLylTNj4Ju/421E88UxqL6R+2NAcy6AFsFnkJkjytLVlf15ZefXX+/dfA1Al7WSXCzCfWVRbO42yMwFu2PNuoZnIfSh3lXx3Isxo1a2srBTAKsm3JemFVPINaGeopBeClptJ3qn8dhi0jF1nnz59dnCItigvyxcPwXlUejBcRcvmAWepuouamn46r7j4qw927bo3FGB9je7yeKbN37TpI4DbOxwjaOwGolsboV+LFo9IkgfLEjSowCRHBkzFVc8kRllmFiZgY2CqrwrGjGiwlHaafxnGrlkyjBvVC/U7D9vJTG59p9EHLWYJtLy2XUSoPfHKrl3zmjk23ixjAHeKF7ghtRJ73XW4q30vqdRxt+sRoEXTKolKYMVgqcr08by2ZdDDbc+aHTrDcmjakf6FxGTMycn5wrBi6AJufHh/pEzTvrx9+6Kvq6ps2UoAdzLA/RiNq+R16kAoyqpKGicVxADt6yro+Gh4E9nZsSntsNFF8bndbkd5K8TxXAlo392588E1+/Zda6dXfqbCJK/GTXFCJ1bqyqEcCnjxEEXgRDN1YQHvrA0K+HJCwlESQR46CfUJeZkyD8obGsa+X16uZG9dTIWlJSWPOpFILNTF7hKfWcevYMyiUnaTHGkmf3kwD4pjBn5/tGTEHCSYY7msHtm+mIwdYScHEjIF2qWlpZI0V5l2RGP/8gX2sG33KgYqAlpJbeQYtABWqYM2Di03Mjk6K1oiYv6xMbAtXu9O20+TncZQfTBc8kLLnvTIhg3K8zHxKIYd8IaDHX32eNrO3dvUdh7fj/d2oLNvcsKWpIS4yty0xFezUhJKozU4QdpxHCclNJl8rlfVBzZoMnCPvFcVPTN0eFN0WVPl9e40MUmyVynsCsaDIWhXVFaKEAzLmemgr8yk7OzF14wYcX2wOtXN7bnbalrufqOk/hp+7zLR2dvUfsg1bmNVywOvb68rHt4nafHwjKSF6YnxtpdZrPDuK6tgYA6RYnlIWUpTVjNms3IQzeR223EQf9lffuxmpixcuFAFDyGVgqF5UFxXN83OoIaqc0JGxkoA+6+Bv7e0d7q/2O2Zt2xnw+btdQfFycNoZp7W2NY5DvA+8u6O+q/L6g86DrSz0k9AKwMjkQFtVur5lZXJSqPNukGrsWxWpppmOP7QsqsxD/b4l8Gels0B2+E3PlrYtSHXwMNq0Krm5tyH1q2Ts6uUXH2Tk0tvGj36osANa7TriGU76pcAwgl2GjrY0Wv4qkrPO4B+wWkDUyPh1dSFLQarhO3L9/nBN1P2JYP2LTX5PgMnJYeO+vQRhMZqO30OVkf4+eGHH55k1/IatpiHUSaSO4tlRDI8EMgHbouW4r3C9D0kNsOClt0u0SZKPJiEuavz8+ewnXuEdgGwoz4qb/gQ4Dm1g9xo6DsAruvUAe7bSHDsaAZrBCTcB1+ljNwxdY0cOfIhGHqIN8FodsYuQfM9wKaQ8kwx2OJLWFor8e+8+MMSJ6fqjRdyndkItPK0KrnELBjRp88af2JMsHJ4tS9TANjDZAHurYnxcS0s/dwNcB2tFyrpeDcRkVMWaXor4H2PUJuVAFfZti5mwVIe2t8Fdo3I3P/kf6raCTl2YW1ad0JCjSqZXz5s2K2BtL7Z2/QIgM1T1YaPzraa1rtWVXje2VDVfD8rEONU0+9J9GRJ6sQTTxS/VyVb4wB22cknn3w1viJHhNbgUigeX8qy6kjIUSg5h9W0bpdLyYx8cGrq5lwyo/gzsdvTNn55eaOcShiRq7yx7QK5N/ZquY9VhnUzhqbPYoWhSkVjhbW1p83fvPldP1py7oKYI6IEAo+ql2I+U8Vn98rfcWcQmn1FXt7dKngKR4PQnfclvwFO1q+hcW2bYZmZmS+fdNJJNwHYI0LTZcUAs2ApPKgyQzrZJfzcFmhVCXNyTs7TgbQ2VjVLPJGyDYswvLqZ4E3deqDll5QRe0/FJXZ+plNCvMkcpykyywP251r8lccQJvNfbD/Pop7pNPrseu3AP+IPHLf0fLD23njjDUnYofKNWceDJn65QS+j9Vclk5kRGRkf+LcuGwesw043K3BF5ZRNKJva2hwD1tsnJfI1Kx80pEyCr2MTIp2ds7ms696A5pXJdjAnpibWkAsFrKKpA80BX5vYsY+xYqDUd9fIgSgsaIk8kFd6C7eT7UoPpkGhv2C317b+jL9VGeyGY5YY32vf6L7JXbS9YcUQBcobG1WFsYhZEfULLyxxyBf/j0eZqGWyITFQzAf+lvXVDuzgNdiumygX1jwEsI8A2C5zFYcd6sC3OOxYhQUty1N19371VUNze7tt0LJq8HVgJw60tCsJUTErnJP6pTyMPRt0S9AsDf9yLAUqOTuAOYPpVEB2+DRTB4DWUE5uWW2wdLEuvArQzrVUyaAwNN/lJJyvwhUz3BFD21rujFEnMA+UDLpRO/J7bppr2ejMpCfNlDVbpqKxcYLZsmHKdeampX2ngE63kWDZ6y2ih6+HAXkbq7jkfN17jAiZAa1y38ya1o5RRoyp+h0Hm/VMQAz7abY9nNgzcK9UwX8LCiHkZMMsP91dDuC+BnBlW94pcDvJV3sn9rOhkjQczCyMcYeC6bKzkeaKi9prUQ6IlvB0h304XJ1AzbP4Q4WH10Exv1Tx1Z10AO4SL3Allb6dq43w+TuJRn7OTGXDwWTm/xGEnEwYuoI2Mb7CDHMqygDaXsyQlYWebKiuvkoFX8FsfRV0u4uGF7jimWcVK3UAfjap9SU7janLELTM/Dfi6FJuilqQQs28TgP/nZYYv9MuPav1slJcK4nyteuJdURzElG8qbpa4vIdX5gG3zomEmMEBLhoTNP+vASxrubAkMnUk40J05fROu0hQvkZGavW2owPw/7rEkeFnbmu5NChLBG/PDmpri9TXJlWn/6gjG2srr6kqb09bCi82R7xBvvEbNmeVI5X/HyWz/KLior+Db6DKcUGSe5Bnocn/c+NsNJHU6DF0eU9u6CFmSS2PSdC4xsfYwPcrvf4LmuFEY3MzUyKL0xxxStzsn6vrOxPVoQbpuzB/D59PlVEK6bI4DMgE7JbyPP1Ejtv/8J3wZiYZx14hm0EsF84DZc3BdqTsrLeTsF5hvXaTDsSYjFe4tgPg1bCZD4sa1hJFMJFduiZrcOGgmk7yYjmJxUVt75eWjrcqJyZ3/HF2MIkTEnOLjPtdUcZtOgq2pVb+WVo00qLMssFuP4OIpYYWVVZ+e+BFVjwl9Q3YVMlWWokoDArFCW56YlKjkaSZa73y8r+7IQf/7rI0pINp6rdo4WOKdBKZ6fk5NjOqc8O0qANVVUz/YU2MNW1dlRm0nz+F4n994OnDky9MTkhTok2e7GoaCG2rK23TBCgtCLLLrldjxZARaMfpkErkzEJl7HL1Mrg2vYh7M4VdmmGqsfD8MwAd4KSVxNmwS1MwGxl1QnGH6bBxn4pKcq2lFXLrifQMw1aCV+ZOXSo7SQQZFA8HQAckeYdTdhETNdNOLSYOm7IjEDzMhIXTcxO+ZWKqAXC5wuwYyXng7ILN81Fyogdo4RMg9ZrIixG2+6wKyvswr9iHx7hKMykbPuM3PSL0bhOZ9NNaNhHTxvgvlkRYMfi6C1vAVOTVTMyYTJbjWmw2ExZXSa0BCyBVsicOWiQ7bOysAv7kstLIliPuABuIZEFFwE6ydFaY3XA0NTbzxiUOuuUHPc9gYDlIbEczixpoADsKvg1CmO3xCqye5JJrZKwF0sNH2WFLYMWTbEIjWE7bIXNhqmkRJIAuCMuTIV6QHffrLzeBbzinwaIkt8q3KZAMysE64m8nTMrL2Pc0N6JHwbSlNf7Q998s+mrvXsvNztuUgfAfgpgs8zWMVMOmR04a/DgJ8yU1WXCS8DWnrx3zbIL8KwIe3J29tNXjxgR0oEYn4GEPU3tE/d62s5u7ejMwQd3rNBnN20z28DFbFB8hIYOaQsDvjGAb7Vod6q1XpWffzUPXNglsBUVFXPJWyZru8pMAp9MiAd7LBrxYFbGoKeWtQVa6ey8TZtWkH3GUVLhIampn99WUHC+UWp7q8Jlee08lqn+EbjlCnB/Ggy4JCUZCFjns0pwhdW2zJSXN9MDEycOP1q8usz0OZJlbINW7D4S062DOUexVwT37eMwkd/z6lzgtKOAbwDgexrwXRaKFsCdA3CXyO/iAMNS3O0rKyp+C8BNB/pZ5ZM2r6XNoEGBVmnp8g4PdH6tpORxdrvuUiFI8dsFvH9kt+hNNFKX07PDtSFgBXx3rdm7d64Z8F02bNgtYrMC1nv57OKFpqI/Phq4IK64o6BAVdYVlaz1WFq2Na1XU6U9tWnTZxUezwRVEkDzVuNMsprNjA9w31vH5xeBKY4kcTDrvlO5p+OUfR6fkoTXUV9U8e9PRyZft48dezrunZsjQf9Ypel4oDETRj21efOXdp1pTAhefGE7Ae+3hG73YfVB4suEbxXRAyaat12kE7PgGsyCF21T0BWDSsAxaIUqqwlz2TlSFqJ9NIwVOXgXkdL050dDX2KtD5bXaYN14OzBg5+RQYq1znUXP/gXfH15Xp4SW7+7+hDL7SoBrXSQNJ43MelYHsudjQZv2LF7bi8omKGXtyInbWWglckSCZMvR8vIMtgxeSXHx9cx8Tr3aHfw7u7BVQZa6YhoF7TM2fJ67O6ORbt9ANvw87y8yyQQNNptH2vtKQWtH3CnA9zD4TVHu1ABrOe6oUNn0+eQ6SmPdhlEs39KVg+CMSzHibKG+zFruFHN2xVN4UlbmUlJO67Mzb15kNu9mtO3o5a6M9r9jKX2IgZaXyefLyxcRCTvDbHUaVW8yNsEc2i6tmFVSdQcnYiDVtiQdVzCrx+O4AaEud6qK9XGEt/zLGvdqVcJ1AnVLKWogFaYkZ2zF4qKXsJcONksc7FYjiWt/SzvXT+uX793YpG/Y4GnqIFWhImd615WVvYQTjZylJgj77BuGJx21qE/AbDXEZgYtVxk3dDPmG8yqqD1SUMctP+vtPQZ/HGVn7kbCYkTF1fC6Tx3oF3fjgR9TdOaBLoFtD4WCYO5Es37lwP/PF0w5i4xBYjrmoev73+odlSPuc72IIa6FbR+4L0G8P4pVsArUbOA9QkN1thEckyA1icaOZ8L7fsLSY7BSoOqM6nMSr69oG/fZZgAL+JO+JLZSrpc9CUQU6D1dV82JiRei1iva3HwngKAI5VdsYXJ1bdES7w8LivrNSZYtvPwRn/ojt0WYxK0gcMhYd2FdXVnEaVwPnnB8lk2G0EZ4d3KNnQbE6rdhPWU4VD+IalHl/P5aaQPfj52oRW5nvcI0AbrPnFhQ71HI7kwKyS5nT+I5TDgDjTnVkBaLMGTOLL0+EM5IgcDTVlLQEtAS0BLQEtAS0BLQEtAS0BLQEtAS0BLQEtAS0BLQEtAS6AbJWBpnbaZ7IKtra158Jvkcrl2p6amblPFu8fjSWtra+sPPUi7dkG7WRXtSNGB37iWlpZTOMY0k00KD2dobUlOTj6goj3kHMdB1CdAeyAnTtZA+wfuVkW0XfBdQHqpdGjXw/PGxMREWdt2fIERN7znC0YScDiCdhnjqYS2jznTeVglf1ZdXd1YGBpD5XQGrAKh7qezthMs+0sIIY6EpqQ8SpCB4nO1YwlGmAB8Hg/fo/kcDGjr5fBomnSahv8Q18giC9oToF0AsPZAX9JDGZ7QbabLjOFoaE+E337QrgJcoiCUKCBoF0B7PPR6Q3cH+JBjt5RgxNc309ugst3JJU4s/fkcyqekxkwxIySTZVKgm+G9o+0sY5LFI4sJkODXzS2Jm3vzt2klYNQgtOI6OjqyoT2SW7atVfpfJAq/0B3AZya324gfC78L7SxoyxtZsGL5+ACjtiwJmadmhzyd3A1iHsgr0agBs79Du4xB6gfNXnzvEUcWwWstvJYKvrib0Sz7zPbXqBy0DiDjCmSyBdo1/F1jVMfs7/LahrbIW3iulrbM1jUqB909vB2KwEg133eK+WFUx+rvlmxamEkVO4hGklUPkjCOuZEhGt1LOyonPlsVWGB5ZJKOTOSNI3zXAQBlfEO7j1fe7fIa51ZG2zt/EK3YAd193ErsTh6ERG7J+ZvgHcc6pzLW9bUEtAS0BLQEtAS0BLQEtAS0BI42Cfw/yD3yxbAFLcEAAAAASUVORK5CYII="/>
                            </defs>
                        </svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('payment')" :active="request()->routeIs('payment')">
                        {{ __('Payment') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('timeline')" :active="request()->routeIs('timeline')">
                        {{ __('Timeline') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
